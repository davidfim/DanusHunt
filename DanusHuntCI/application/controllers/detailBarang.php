<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBarang extends CI_Controller {
    function index(){
        $data['barang'] =  $this->db->get('barang');
        $data['seller'] = $this->db->get('seller');
        $this->load->view('template/header');
        $this->load->view('DetailBarang/detailbarang', $data);
        $this->load->view('template/footer');
  
    }
}
