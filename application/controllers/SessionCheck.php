<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionCheck extends CI_Controller {

    public function index() {
        if(!is_null($this->session->user_session)){

        } else {
            redirect('logout');
        }

    }















}
