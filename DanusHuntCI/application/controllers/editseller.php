<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditSeller extends CI_Controller {
    function index(){
  
        $this->load->view('template/header');
        $this->load->view('Edit/editseller');
        $this->load->view('template/footer');
        
    }
}
