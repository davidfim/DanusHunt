<?php 
 
class hunter extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("loginhunter"));
		}
	}
 
	function index(){
		$this->load->view('template/header');
		$this->load->view('profile/profilehunter');
		$this->load->view('template/footer');
	}
}