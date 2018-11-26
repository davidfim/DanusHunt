<?php 
 
class seller extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("loginseller"));
		}
	}
 
	function index(){
		$this->load->view('template/header');
		$this->load->view('profile/profileseller');
		$this->load->view('template/footer');
	}
}