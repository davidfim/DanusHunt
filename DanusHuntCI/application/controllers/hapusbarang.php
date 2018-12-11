<?php 
 
class hapusbarang extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("loginawal"));
		}
    }
    
    function hapushunter(){
		$this->db->delete('barang', array('id_barang' => $key['id_barang']);
        redirect(base_url('main'));
	}
	
	function index(){
		echo "terhapus";
	}
}