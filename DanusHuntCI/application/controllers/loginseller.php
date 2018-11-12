<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginseller extends CI_Controller {
    function index(){
        $this->load->view('login/loginseller');
    }
}

