<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginseller extends CI_Controller {
    function index(){
        $this->load->view('login/loginseller');
    }
    function __construct(){
        parent::__construct();		
        $this->load->model('m_login');

    }
    
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("seller", $where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'user' => $username,
                'peran' =>'seller',
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("seller"));

        }else{
        echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('main'));
    }

}

