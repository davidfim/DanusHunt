<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailToko extends CI_Controller {
    function index(){
        $data['seller'] =  $this->db->get('seller');
        $data['barang'] =  $this->db->get('barang');
        $this->load->view('template/header');
        $this->load->view('detailToko/detailToko', $data);
        $this->load->view('template/footer');
        
    }
}
