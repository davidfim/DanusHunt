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
        $image=$this->input->post('image');
    
        $result = $this->db->query("SELECT id_seller from seller where username='".$this->session->user."'");
        $isExist = $result->num_rows() > 0;
        // kalo gaada
        if(!$isExist) {
            // kasih pesan gabisa nginput
            redirect('seller');
            // akhiri
            return;
        }

        $idseller = (int) $result->result()[0]->id_seller;

        // echo "<pre>"; var_dump($idseller); die();

        $hasil = $this->db->query("INSERT into barang (namaBarang,jenis,harga,keterangan,id_seller,image) values ('$namabarang', '$jenis', '$harga', '$keterangan', $idseller,'$image')");

        // var_dump($hasil);
        redirect('main');
    }
}
