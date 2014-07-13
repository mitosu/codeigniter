<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {
        $data = array(
            'title' => 'Login de acceso'
        );
        
        $this->load->helpers('url');
        /*
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/login', $data);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navigation');
            $this->load->view('templates/welcome_message');
            $this->load->view('templates/footer');
        }
        */
        $user = 'internet';
        $pass = '1234567';
        
        if(!($_POST['txtuser'] === $user) && ($_POST['txtpass'] === $pass)){
            $this->load->view('login/login', $data);
        }else{
            $this->load->view('login/member_area');
        }
    }

}
