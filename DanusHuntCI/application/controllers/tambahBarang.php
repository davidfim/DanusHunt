<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahBarang extends CI_Controller {
    function index(){
  
        $this->load->view('template/header');
        $this->load->view('Form/tambahBarang');
        $this->load->view('template/footer');
        
    }
}
