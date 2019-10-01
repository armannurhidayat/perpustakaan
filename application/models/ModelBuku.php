<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBuku extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_buku', $id);
		}
		$this->db->join('peta_lokasi', 'peta_lokasi.id_lokasi = data_buku.id_lokasi', 'LEFT');
		$this->db->select('*');
		$this->db->order_by('kode_buku', 'DESC');
		$this->db->from('data_buku');
		return $this->db->get();
	}

	public function insert() {
		$data =[
			'id_buku' 		=> htmlspecialchars($this->input->post('id_buku', TRUE)),
			'judul' 		=> htmlspecialchars(strtolower($this->input->post('judul', TRUE))),
			'kode_buku' 	=> htmlspecialchars($this->input->post('kode_buku', TRUE)),
			'id_jenis' 		=> htmlspecialchars($this->input->post('id_jenis', TRUE)),
			'id_klas' 		=> htmlspecialchars($this->input->post('id_klas', TRUE)),
			'isbn' 			=> htmlspecialchars($this->input->post('isbn', TRUE)),
			'penulis' 		=> htmlspecialchars($this->input->post('penulis', TRUE)),
			'penerbit' 		=> htmlspecialchars($this->input->post('penerbit', TRUE)),
			'id_lokasi' 	=> htmlspecialchars($this->input->post('id_lokasi', TRUE)),
			'jumlah' 		=> htmlspecialchars($this->input->post('jumlah', TRUE)),
			'keterangan' 	=> htmlspecialchars($this->input->post('keterangan', TRUE))
		];

		$this->db->insert('data_buku', $data);
	}

	public function update() {
		$data =[
			'judul' 		=> htmlspecialchars(strtolower($this->input->post('judul', TRUE))),
			'kode_buku' 	=> htmlspecialchars($this->input->post('kode_buku', TRUE)),
			'id_jenis' 		=> htmlspecialchars($this->input->post('id_jenis', TRUE)),
			'id_klas' 		=> htmlspecialchars($this->input->post('id_klas', TRUE)),
			'isbn' 			=> htmlspecialchars($this->input->post('isbn', TRUE)),
			'penulis' 		=> htmlspecialchars($this->input->post('penulis', TRUE)),
			'penerbit' 		=> htmlspecialchars($this->input->post('penerbit', TRUE)),
			'id_lokasi' 	=> htmlspecialchars($this->input->post('id_lokasi', TRUE)),
			'jumlah' 		=> htmlspecialchars($this->input->post('jumlah', TRUE)),
			'keterangan' 	=> htmlspecialchars($this->input->post('keterangan', TRUE))
		];

		$id =[
			'id_buku' 		=> htmlspecialchars($this->input->post('id_buku', TRUE))
		];

		$this->db->where($id)->update('data_buku', $data);
	}

	public function delete($id) {
		$this->db->delete('data_buku', ['id_buku' => $id]);
	}

	public function kodeBuku() {
	    $this->db->select('Right(data_buku.kode_buku,2) as kode_buku', FALSE);
	    $this->db->order_by('kode_buku','DESC');
	    $this->db->limit(1);
	    $query = $this->db->get('data_buku');
	        if($query->num_rows() <> 0){
	            $data = $query->row();
	            $kode = intval($data->kode_buku) + 1;
	        } else {
	            $kode = 1;
	        }

        $date = date('Ymd');
	    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
	    $kodehasil = "BK-".$date.$kodemax;
	    return $kodehasil;
	}
}