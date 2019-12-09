<?php
  class laporantran extends CI_Controller
    { 
    function __construct() {
      parent:: __construct();
      $this->load->model('laporanmodel');
      $this->load->helper('url');
               }
    function index(){
      $data['title'] = "Daftar Transaksi";
      $data['datatransaksi']= $this->laporanmodel->ambil_transaksi();
      $this->load->view('templates/header', $data);
      $this->load->view('mobil/laporanview');
      $this->load->view('templates/footer');
      }
   }
?>