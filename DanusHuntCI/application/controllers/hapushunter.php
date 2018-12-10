<?php 
 
class hapushunter extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("loginhunter"));
		}
    }
    
    function hapushunter(){
		$this->db->delete('hunter', array('username' => $this->session->userdata('user')));
		$this->session->sess_destroy();
        redirect(base_url('main'));
	}
	
	function index(){
		echo "terhapus";
	}
}