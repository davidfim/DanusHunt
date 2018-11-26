<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBarang extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('DetailBarang/detailbarang');
        $this->load->view('template/footer');
  
    }
}
