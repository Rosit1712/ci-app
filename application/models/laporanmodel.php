<?php
  class laporanmodel extends CI_Model {
      public function __construct()
      {
       $this->load->database();
       }
  public function ambil_transaksi() { //fungsi untuk mengambil data transaksi
           $this->db->select('transaksi.*, mobil.merk as merk, mobil.harga as harga, pembeli.nama_pembeli as nama, transaksi.tgl as tgl');
           $this->db->join('mobil','transaksi.id = mobil.id');
           $this->db->join('pembeli','transaksi.id_pembeli = pembeli.id_pembeli');
           $this->db->from('transaksi');
           $query = $this->db->get();
           return $query->result();
    }
  }
?>