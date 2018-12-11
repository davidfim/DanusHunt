<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditHunter extends CI_Controller {
    function index(){

        $this->load->view('template/header');
        $this->load->view('Edit/edithunter');
        $this->load->view('template/footer');

    }

    function prosesedit(){
            $tampunguname = $this->session->user;

            if (isset($_POST['namalengkap'])!="") {
              if ($_POST['namalengkap']!=NULL) {
                $this->db->query("UPDATE hunter SET namalengkap='".$_POST['namalengkap']."' where username='".$tampunguname."'");
              }
            }
            if (isset($_POST['email'])!="") {
              if ($_POST['email']!=NULL) {
                  $this->db->query("UPDATE hunter SET email='".$_POST['email']."' where username='".$tampunguname."'");
              }
            }
            if (isset($_POST['no_hp'])!="") {
              if ($_POST['no_hp']!=NULL) {
                $this->db->query("UPDATE hunter SET no_hp='".$_POST['no_hp']."' where username='".$tampunguname."'");
              }
            }
            if (isset($_POST['image'])!="") {
              if ($_POST['image']!=NULL) {
                $this->db->query("UPDATE seller SET image='".$_POST['image']."' where username='".$tampunguname."'");
              }
            }
            
            redirect('hunter');
        }
}
