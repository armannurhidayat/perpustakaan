<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKlasifikasi extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_klas', $id);
		}

		$this->db->select('*');
		$this->db->order_by('kode_klas', 'DESC');
		$this->db->from('klasifikasi_buku');
		return $this->db->get();
	}

	public function insert() {
		$data =[
			'id_klas' 	=> htmlspecialchars($this->input->post('id_klas', TRUE)),
			'kode_klas' => htmlspecialchars($this->input->post('kode_klas', TRUE)),
			'nama_klas' => htmlspecialchars($this->input->post('nama_klas', TRUE))
		];
		$this->db->insert('klasifikasi_buku', $data);
	}

	public function update() {
		$data =[
			'kode_klas' => htmlspecialchars($this->input->post('kode_klas', TRUE)),
			'nama_klas' => htmlspecialchars($this->input->post('nama_klas', TRUE))
		];

		$id =[
			'id_klas' 	=> htmlspecialchars($this->input->post('id_klas', TRUE))
		];
		$this->db->where($id)->update('klasifikasi_buku', $data);
	}

	public function delete($id) {
		$this->db->delete('klasifikasi_buku', ['id_klas' => $id]);
	}

	public function kodeKlas() {
	    $this->db->select('Right(klasifikasi_buku.kode_klas,2) as kode_klas', FALSE);
	    $this->db->order_by('kode_klas','DESC');
	    $this->db->limit(1);
	    $query = $this->db->get('klasifikasi_buku');
	        if($query->num_rows() <> 0){
	            $data = $query->row();
	            $kode = intval($data->kode_klas) + 1;
	        } else {
	            $kode = 1;
	        }

        $date = date('d');
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
	    $kodehasil = "KLS-".$date.$kodemax;
	    return $kodehasil;
	}
}