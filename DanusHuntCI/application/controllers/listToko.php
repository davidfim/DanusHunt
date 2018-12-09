<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listToko extends CI_Controller {
    function index(){
        $data['seller'] =  $this->db->get('seller');
        $this->load->view('template/header');
        $this->load->view('Barang/listToko', $data);
        $this->load->view('template/footer');
        
    }
}
