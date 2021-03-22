<?php

require_once 'DatatableModel.php';
class User_model extends DatatableModel
{
    function __construct() {
        // Set table name
        $this->table = 'user_master_data';
        $this->table1 = 'department_mapping_data';
        $this->table2 = 'department_master_data';
        $this->table3 = 'sub_dep_master_data';
        $this->table4 = 'sub_dep_mapping_data';


        date_default_timezone_set('Asia/Kolkata');
    }

    public function generation_user_id() {


        $user_id = 'user_' . rand(10, 1000);
        $this->db->select('user_id');
        $this->db->from($this->table);
        $this->db->where('user_id', $user_id);
        $this->db->get();
        if ($this->db->affected_rows() > 0) {
            return $this->generation_user_id();
        } else {
            return $user_id;
        }

    }

    function is_mobile_available($mobile_no) {
        try {
            return $this->db->where('mobile_no', $mobile_no)->get($this->table)->row();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }

    function is_email_available($email) {
        try {
            return $this->db->where('email', $email)->get($this->table)->row();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }


    public function insert_user($data,$department_data,$sub_department_data,$update_user_id) {
        try {
            $this->db->trans_start();
            if($update_user_id=='0'){
                $this->db->insert($this->table, $data);
            } else {
                $this->db->where('user_id',$update_user_id);
                $this->db->update($this->table, $data);
            }

    if($this->db->delete($this->table1, array('user_id'=>$update_user_id))) {
       if($department_data!=null){
           $this->db->insert_batch($this->table1, $department_data);
       }


    }

                if ($this->db->delete($this->table4, array('user_id' => $update_user_id))) {
                    if($sub_department_data!=null){
                        $this->db->insert_batch($this->table4, $sub_department_data);
                    }

                }



            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "insert user Transaction Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "insert user Transaction Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }



    function get_user_data_by_id($user_id){
        try {

            $this->db->select('*,
            (select GROUP_CONCAT(department_id) from department_mapping_data where user_id=user_master_data.user_id) as department_id,
            (select GROUP_CONCAT(sub_department_id) from sub_dep_mapping_data where user_id=user_master_data.user_id) as sub_department_id ');
            $this->db->from($this->table);
            $this->db->where('user_id',$user_id);
           return $this->db->get()->row();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }





    function get_department_drop_down(){
        try {

            $this->db->select('*');
            $this->db->from($this->table2);
            return $this->db->get()->result();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }

    function get_sub_department_drop_down($department_id){
        try {

            $this->db->select('*');
            $this->db->from($this->table3);
            $this->db->where_in('department_id',$department_id);
            return $this->db->get()->result();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            return null;
        }
    }

    /*
     * return file name
     *
     */

    function upload_file($upload_path) {

        if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] != '4') {
            $files = $_FILES;
            if (is_array($_FILES['userfile']['name'])) {
                $count = count($_FILES['userfile']['name']); // count element
            } else {
                $count = 1;
            }
            $_FILES['userfile']['name'] = $files['userfile']['name'];
            $_FILES['userfile']['type'] = $files['userfile']['type'];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'];
            $_FILES['userfile']['error'] = $files['userfile']['error'];
            $_FILES['userfile']['size'] = $files['userfile']['size'];
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = '*';
            $config['max_size'] = '500000';    //limit 10000=1 mb
            $config['remove_spaces'] = true;
            $config['overwrite'] = false;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $fileName = preg_replace('/\s+/', '_', str_replace(' ', '_', $_FILES['userfile']['name']));
            $data = array('upload_data' => $this->upload->data());
            if (empty($fileName)) {
                $response['status'] = 203;
                $response['body'] = "file is empty";
                return false;
            } else {
                $file = $this->upload->do_upload('userfile');
                if (!$file) {
                    $error = array('upload_error' => $this->upload->display_errors());
                    $response['status'] = 204;
                    $response['body'] = $upload_path.'/'.$files['userfile']['name'] . ' ' . $error['upload_error'];
                    return $response;
                } else {
                    $response['status'] = 200;
                    $response['body'] = $upload_path.'/'.$fileName;
                    return $response;
                }
            }
        } else {
            $response['status'] = 200;
            $response['body'] = "";
            return $response;
        }
    }



}