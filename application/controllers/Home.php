<?php

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin');
	}

	public function index() {  
		// $data['judul'] = 'Halaman Home';
		// $data['nama'] = $nama;

	if($this->admin->logged_id()) {
		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	} else {
		redirect("login");
	}

	}

	public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}