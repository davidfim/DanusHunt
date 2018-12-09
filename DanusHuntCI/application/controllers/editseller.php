<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditSeller extends CI_Controller {
    function index(){
  
        $this->load->view('template/header');
        $this->load->view('Edit/editseller');
        $this->load->view('template/footer');
        
    }
    function prosesedit(){
        $tampunguname = $this->session->user;

        if (isset($_POST['namalengkap'])!="") {
          if ($_POST['namalengkap']!=NULL) {
            $this->db->query("UPDATE seller SET namalengkap='".$_POST['namalengkap']."' where username='".$tampunguname."'");
          }
        }
        if (isset($_POST['email'])!="") {
          if ($_POST['email']!=NULL) {
              $this->db->query("UPDATE seller SET email='".$_POST['email']."' where username='".$tampunguname."'");
          }
        }
        if (isset($_POST['no_hp'])!="") {
          if ($_POST['no_hp']!=NULL) {
            $this->db->query("UPDATE seller SET no_hp='".$_POST['no_hp']."' where username='".$tampunguname."'");
          }
        }
        if (isset($_POST['idline'])!="") {
            if ($_POST['idline']!=NULL) {
              $this->db->query("UPDATE seller SET idline='".$_POST['idline']."' where username='".$tampunguname."'");
            }
          }
        if (isset($_POST['bio'])!="") {
            if ($_POST['bio']!=NULL) {
              $this->db->query("UPDATE seller SET bio='".$_POST['bio']."' where username='".$tampunguname."'");
            }
          }        
        redirect('seller');
    }
}
