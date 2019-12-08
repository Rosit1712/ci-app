<?php 

class Mobil_model extends CI_model {

	public function getAllmobil() {
		return $this->db->get('mobil')->result_array(); // tampilin data dari database dari tabel mahasiswa
	}

	public function tambahDataAkun() {
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];
		$this->db->insert('admin', $data);
	}

	// masukin data ke database
	public function tambahDatamobil() {
		$data = [
			"merk" => $this->input->post('merk', true),
			"warna" => $this->input->post('warna', true),
			"tipe" => $this->input->post('tipe', true),
			"harga" => $this->input->post('harga', true)
		];
		$this->db->insert('mobil', $data); // masukin data ke tabel mahasiswa di database
	}

	// hapus data dari database, berdasarkan id
	public function hapusDataMobil($id) {
		$this->db->where('id', $id); // hapus data berdasarkan id
		$this->db->delete('mobil'); // hapus data dari tabel mahasiswa di database
	}

	public function getMobilbyID($id) {
		return $this->db->get_where('mobil', ['id' => $id])->row_array();
	}

	// UBAH data ke database
	public function ubahDatamobil() {
		$data = [
			"merk" => $this->input->post('merk', true),
			"warna" => $this->input->post('warna', true),
			"tipe" => $this->input->post('tipe', true),
			"harga" => $this->input->post('harga', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mobil', $data); // ubah data ke tabel mahasiswa di database
	}

	public function get_Search($ygdicari){
			$this->db->select('*');
			$this->db->from('mobil');
			$this->db->like('merk',$ygdicari);
			$this->db->or_like('warna',$ygdicari);
			$this->db->or_like('tipe',$ygdicari);
			return $this->db->get()->result();		
	}
}