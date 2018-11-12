<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('main/main');
        $this->load->view('template/footer');
    }
}
