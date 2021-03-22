<?php

class User_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('User_model');


    }


    public function add_user()
    {  $mobile_no = $this->input->post_get("mobile_no");
        $first_name = $this->input->post_get("first_name");
        $last_name= $this->input->post_get("last_name");
        $password = $this->input->post_get("password");
        $email = $this->input->post_get("email");
        $department = $this->input->post_get("department");
        $sub_department = $this->input->post_get("sub_department");
        $update_user_id = $this->input->post_get("update_user_id");
        $prev_userfile=$this->input->post_get("prev_userfile");
        $user_id = $this->User_model->generation_user_id();

        if (!is_null($mobile_no)  &&  !is_null($first_name) && !is_null($email)  && !is_null($last_name)) {
            $data=array();
            $department_data=array();
            $sub_department_data=array();
            $des_path = "profile";

if(isset($_FILES['userfile']) && $_FILES["userfile"]["error"] != 4){

    $result = $this->User_model->upload_file($des_path); //upload_multiple_file_new

    if ($result["status"] == 200) {
        if ($result["body"]!=null) {

            $des_path = $result["body"];


        } else {
            $des_path='';
        }
    }
} else {
    $des_path=$prev_userfile;
}



  $data=array(
    'mobile_no'=>$mobile_no,
    'first_name'=>$first_name,
      'email'=>$email,
      'last_name'=>$last_name,
    'password'=>md5($password),
    'created_on'=>date('Y-m-d'),
      'status'=>1,
      'image'=>$des_path

);


            if($update_user_id=='0'){
                $data['user_id']=$user_id;
                if(!empty($department)) {
                    for ($i = 0; $i < count($department); $i++) {
                        $department_data[] = array(
                            'user_id' => $user_id,
                            'department_id' => $department[$i]
                        );
                    }
                }
                if(!empty($sub_department)) {
                    for ($j = 0; $j < count($sub_department); $j++) {
                        $role_data[] = array(
                            'user_id' => $user_id,
                            'sub_department_id' => $sub_department[$j]
                        );
                    }
                }

            } else {
                if(!empty($department)) {
                    for ($i = 0; $i < count($department); $i++) {
                        $department_data[] = array(
                            'user_id' => $update_user_id,
                            'department_id' => $department[$i]
                        );
                    }
                }
                if(!empty($sub_department)) {
                    for ($j = 0; $j < count($sub_department); $j++) {
                        $sub_department_data[] = array(
                            'user_id' => $update_user_id,
                            'sub_department_id' => $sub_department[$j]
                        );
                    }
                }
            }
            $final_result=$this->User_model->insert_user($data,$department_data,$sub_department_data,$update_user_id);
            if($final_result==TRUE){
                $response["status"] = true;
                $response["body"] = "Successfully User added";
            } else {
                $response["status"] = false;
                $response["body"] = "Failed to add User";
            }

        } else {
            $response["status"] = false;
            $response["body"] = "Invalid Parameter";
        }
        echo json_encode($response);
    }


    function email_validation()
    {
        if (!is_null($this->input->post_get("email"))) {
            if (!is_null($this->User_model->is_email_available($this->input->post_get("email")))) {

                echo json_encode(false);
            } else {

                echo json_encode(true);
            }
        } else {
            echo json_encode(false);
        }
    }
    /*
 * check whether mobile is aleady exist or not
 */

    function mobile_validation()
    {
        if (!is_null($this->input->post_get("mobile_no"))) {
            if (!is_null($this->User_model->is_mobile_available($this->input->post_get("mobile_no")))) {

                echo json_encode(false);
            } else {

                echo json_encode(true);
            }
        } else {
            echo json_encode(false);
        }
    }

    function fetch_user_data(){
        $result=array();
        if(!is_null($this->input->post_get("user_id"))){
            $user_id = $this->input->post_get("user_id");
            $result=$this->User_model->get_user_data_by_id($user_id);
//            echo $this->db->last_query();
            if(!is_null($result)){
                $response["status"] = true;
                $response["body"] = $result;
            } else {
                $response["status"] = false;
                $response["body"] = $result;
            }
        } else {
            $response["status"] = false;
            $response["body"] = $result;
        }
        echo json_encode($response);
    }



    function get_department(){


        $result=$this->User_model->get_department_drop_down();

        if($result!=null){
            $data="<option selected value='' disabled>Select departmentr</option>";
            foreach($result as $row){
                $data.="<option value={$row->id}>{$row->department}</option>";
            }
            $response["status"] = true;
            $response["body"] = $data;
        } else {
            $data="<option selected value=''>No department found</option>";
            $response["status"] = false;
            $response["body"] = $data;
        }

        echo json_encode($response);
    }

    function get_sub_department(){

$department_id=$this->input->post_get('department_id');

    $result = $this->User_model->get_sub_department_drop_down($department_id);

    if ($result != null) {
        $data = "<option selected value='' disabled>Select Sub Department</option>";
        foreach ($result as $row) {
            $data .= "<option value={$row->id}>{$row->sub_department}</option>";
        }
        $response["status"] = true;
        $response["body"] = $data;
    } else {
        $data = "<option selected value=''>No Sub Department found</option>";
        $response["status"] = false;
        $response["body"] = $data;
    }


        echo json_encode($response);
    }

    function get_permission(){
        $role_id=$this->input->post_get('role_id');

        $result=$this->User_model->get_permission_drop_down($role_id);

        if($result!=null){
            $data="<option selected value='' disabled>Select Permission</option>";
            foreach($result as $row){
                $data.="<option value={$row->id}>{$row->permission}</option>";
            }
            $response["status"] = true;
            $response["body"] = $data;
        } else {
            $data="<option selected value=''>No permission found</option>";
            $response["status"] = false;
            $response["body"] = $data;
        }

        echo json_encode($response);
    }

    function load_user_table() {


        $array=array('status' => 1);

        $this->db->select("*");
        $this->db->where($array);
        $this->db->order_by("id", " Desc");
        $memData1 = $this->db->get("user_master_data")->result();
// $this->db->last_query();

        $data = $row = array();
        $column_search = array('category');
        $i = 0;
        $draw = intval($this->input->post("draw"));
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search = $this->input->post("search");
        $search = $search['value'];
        $col = 0;
        $dir = "";
        if (!empty($order)) {
            foreach ($order as $o) {
                $col = $o['column'];
                $dir = $o['dir'];
            }
        }

        if ($dir != "asc" && $dir != "desc") {
            $dir = "desc";
        }
        $valid_columns = array(
            0 => 'first_name',
            1 => "created_on"
        );
        if (!isset($valid_columns[$col])) {
            $order = null;
        } else {
            $order = $valid_columns[$col];
        }
        if ($order != null) {
            $this->db->order_by($order, $dir);
        }


        if (!empty($search)) {
            $x = 0;
            foreach ($valid_columns as $sterm) {
                if ($x == 0) {
                    $this->db->like($sterm, $search);
                } else {
                    $this->db->or_like($sterm, $search);
                }
                $x++;
            }
        }


        $this->db->limit($length, $start);
        $this->db->select("*");
        $this->db->where($array);
        $this->db->order_by("id", " Desc");
        $memData = $this->db->get("user_master_data")->result();
//echo $this->db->last_query();
        $data = array();
        foreach ($memData as $index=>$item) {

                $data[] = array(
                   $item->first_name,
                    $item->email,
                    $item->mobile_no,
                    $item->created_on,
                    $item->image,
                     $item->user_id,
                    );

        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => count($memData),
            "recordsFiltered" => count($memData1),
            "data" => $data,
        );
        echo json_encode($output);
    }



}