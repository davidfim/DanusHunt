<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditHunter extends CI_Controller {
    function index(){
  
        $this->load->view('template/header');
        $this->load->view('Edit/edithunter');
        $this->load->view('template/footer');
        
    }
}
