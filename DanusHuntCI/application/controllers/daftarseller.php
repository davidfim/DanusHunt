<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarseller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_daftar');
    }

    function index(){
        $this->load->view('daftar/daftarseller');   
    }

    function prosesdaftar(){
        $namaseller=$this->input->post('NamaSeller');
        $username=$this->input->post('UsernameSeller');
        $email=$this->input->post('EmailSeller');
        $pass=$this->input->post('PasswordSeller');
        $hp=$this->input->post('NoHpSeller');
        $line=$this->input->post('IdLineSeller');

        $data = array (
            'namalengkap' => $namaseller,
            'username' => $username,
            'email'=> $email,
            'password'=>$pass,
            'no_hp'=>$hp,
            'idline'=>$line
        );
        $this->m_daftar->input_data($data,'seller');
        redirect('loginawal');
    }
}
