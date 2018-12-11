<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploadGambar extends CI_Controller {
    function index(){
        $data['barang'] =  $this->db->get('barang');
        $this->load->view('template/header');
        $this->load->view('Form/uploadGambar', $data);
        $this->load->view('template/footer');
    }
}

