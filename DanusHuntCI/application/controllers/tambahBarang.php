<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahBarang extends CI_Controller {
    function index(){
        
        $this->load->view('template/header');
        $this->load->view('Form/tambahBarang');
        $this->load->view('template/footer');
        
    }
    function prosestambah(){

        $namabarang=$this->input->post('namaBarang');
        $jenis=$this->input->post('jenis');
        $harga=$this->input->post('harga');
        $keterangan=$this->input->post('keterangan');
    
        $idseller= $this->db->query("SELECT id_seller from seller where username='".$this->session->user."'");
        
        $this->db->query("INSERT into barang ('namaBarang','jenis','harga','keterangan','id_seller') values ('$namabarang', '$jenis', '$harga', '$keterangan', '$idseller')");

        redirect('seller');
    }
}
