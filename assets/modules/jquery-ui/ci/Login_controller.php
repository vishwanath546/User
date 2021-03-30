<?php


class Login_controller extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');


    }

    public function login_validation()
    {

      $username = $this->input->post_get("email");
            $password = $this->input->post_get("password");





        if (!is_null($username) && !is_null($password)) {

            $resultData = $this->Login_model->login($username, $password);
            if ($resultData["status"] == 200) {
//var_dump($resultData["body"]);
                $this->session->user_session = $resultData["body"];


                $response["status"] = 200;
                $response["body"] = $resultData["body"];
            } else if ($resultData["status"] == 202) {
                $response["status"] = 202;
                $response["body"] = $resultData["body"];
            } else if ($resultData["status"] == 201) {
                $response["status"] = 202;
                $response["body"] = $resultData["body"];
            } else {
                $response = $resultData;
            }
        } else {
            $response["status"] = 200;
            $response["body"] = "Invalid Parameter";
        }
        echo json_encode($response);
    }

    function logout()
    {

        session_destroy();
        redirect("login");
    }
}