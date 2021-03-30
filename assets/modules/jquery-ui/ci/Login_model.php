<?php

require_once 'DatatableModel.php';
class Login_model extends DatatableModel
{
    function __construct() {
        // Set table name
        $this->table = 'user_master_data';
        // Set orderable column fields
        $this->column_order = array('user_name', 'user_id', 'created_on');
        // Set searchable column fields
        $this->column_search = array('user_name', 'user_id');
        // Set default order
        $this->order = array('user_name' => 'asc');
        $this->where = "";
        date_default_timezone_set('Asia/Kolkata');

    }

    public function login($username, $password) {

        try {

                $where = array("email" => $username, "status" => 1,"password"=>md5($password));

            $user_details = $this->db->select(array("user_id", "first_name" ,"last_name","mobile_no", "email", "password"))->where($where)->get($this->table)->row();
            if (is_null($user_details)) {
                $data["status"] = 201;
                $data["body"] = "Invalid username or password";
                return $data;
            } else {

                    if (!is_null($user_details)) {
                        $data["status"] = 200;

                        $data["body"] = $user_details;
                    } else {
                        $data["status"] = 200;

                        $data["body"] = $user_details;
                        return $data;
                    }
                    return $data;

            }
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $data["status"] = 204;
            $data["body"] = $exc->getMessage();
            return $data;
        }
    }


}