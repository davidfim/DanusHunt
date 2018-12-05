<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarhunter extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_daftar');
    }

    function index(){
        $this->load->view('daftar/daftarhunter');   
    }

    function prosesdaftar(){
        $namahunter=$this->input->post('NamaHunter');
        $usernamehunter=$this->input->post('UsernameHunter');
        $emailhunter=$this->input->post('EmailHunter');
        $passhunter=$this->input->post('PasswordHunter');
        $hphunter=$this->input->post('NoHpHunter');

        $data = array (
            'namalengkap' => $namahunter,
            'username' => $usernamehunter,
            'email'=> $emailhunter,
            'password'=>$passhunter,
            'no_hp'=>$hphunter
        );
        $this->m_daftar->input_data($data,'hunter');
        redirect('loginawal');
    }
}
