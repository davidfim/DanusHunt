<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginhunter extends CI_Controller {
    function index(){
        $this->load->view('login/loginuser');
    }
}

