<?php

class Mobil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mobil_model'); // load dulu klo mao pke model ya kan
		$this->load->library('form_validation'); // buat validasi form di tambah.php
	}

	// tampilin data dari database
	public function index() {
		$data['judul'] = 'Daftar Mahasiwa';
		$data['mobil'] = $this->Mobil_model->getAllmobil(); // panggil di folder model lalu jalankan Mahasiwa_model.php dan jalankan method getallmobil() untuk nampilin data dari database
		$this->load->view('templates/header', $data);
		$this->load->view('mobil/index', $data);
		$this->load->view('templates/footer');
	}

	// tambah data ke database
	public function tambah() {
		$data['judul'] = 'Form Tambah data';

		$this->form_validation->set_rules('merk', 'MERK', 'required');
		$this->form_validation->set_rules('warna', 'WARNA', 'required');
		$this->form_validation->set_rules('harga', 'HARGA', 'required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('mobil/tambah');
			$this->load->view('templates/footer');
		} else {
			// masukin data ke database
			$this->Mobil_model->tambahDatamobil();
			$this->session->set_flashdata('tampil', 'Ditambahkan');
			redirect('mobil');
		}
	}

	// hapus data dari database, berdasarkan id
	public function hapus($id) {
		$this->Mobil_model->hapusDataMobil($id);
		$this->session->set_flashdata('tampil', 'Dihapus');
		redirect('mobil');
	}

	public function detail($id) {
		$data['judul'] = 'Detail Mobil';
		$data['mobil'] = $this->Mobil_model->getMobilbyID($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mobil/detail', $data);
		$this->load->view('templates/footer');
	}

	// ubah data ke database
	public function ubah($id) {
		$data['judul'] = 'Form ubah data';
		$data['mobil'] = $this->Mobil_model->getMobilbyID($id);
		$data['tipe'] = ['sport','berat','pickup'];		

		$this->form_validation->set_rules('merk', 'MERK', 'required');
		$this->form_validation->set_rules('warna', 'WARNA', 'required');
		$this->form_validation->set_rules('harga', 'HARGA', 'required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('mobil/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			// masukin data ke database
			$this->Mobil_model->ubahDatamobil();
			$this->session->set_flashdata('tampil', 'Diubahkan');
			redirect('mobil');
		}
	}
		public function cari(){
		$ygdicari = $this->input->post('cari');
			$data['mobil']=$this->Mobil_model->get_Search($ygdicari);
				$this->load->view('templates/header', $data);		
				$this->load->view('mobil/cariview',$data);
				$this->load->view('templates/footer');
		}

}