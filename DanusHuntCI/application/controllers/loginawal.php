<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginawal extends CI_Controller {
    function index(){
        $this->load->view('login/loginawal');
        $this->load->view('template/header');
    }
}
