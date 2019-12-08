<?php 

class Registrasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mobil_model'); // load dulu klo mao pke model ya kan
		$this->load->library('form_validation'); // buat validasi form di tambah.php
	}

	public function RegistrasiAkun() {
		$data['judul'] = 'Registrasi';

		$this->form_validation->set_rules('username', 'USERNAME', 'required');
		$this->form_validation->set_rules('password', 'PASSWORD', 'required');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('registrasi/registrasiAkun');
			$this->load->view('templates/footer');
		} else {
			// masukin data ke database
			$this->Mobil_model->tambahDataAkun();
			$this->session->set_flashdata('pi', 'Ditambahkan');
			redirect('registrasi/RegistrasiAkun');
		}
		// $this->load->view('registrasi/RegistrasiAkun');
	}

}