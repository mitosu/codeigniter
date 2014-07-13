<?php

class Loginzurb extends CI_Controller{
    function index(){
        $data = array('title' => 'Login Zurb');
        $this->load->helpers('url');
        
        $this->load->view('zurb/login', $data);
    }
}

