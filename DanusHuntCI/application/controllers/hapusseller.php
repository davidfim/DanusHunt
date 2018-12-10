<?php 
 
class hapusseller extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("loginhunter"));
		}
    }
    
    function hapusseller(){
		
		//hapus barang dagangan si seller
			//ambil id_seller dari tabel seller where sessionnya
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
		$this->db->delete('barang', array('id_seller' => $idseller));

		$this->db->delete('seller', array('username' => $this->session->userdata('user')));

		$this->session->sess_destroy();
        redirect(base_url('main'));
	}
	
	function index(){
		echo "terhapus";
	}
}