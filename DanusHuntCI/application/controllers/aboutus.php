<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('AboutUs/aboutus');
        $this->load->view('template/footer');
        
    }
}
