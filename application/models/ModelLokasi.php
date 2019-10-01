<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLokasi extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_lokasi', $id);
		}

		$this->db->select('*');
		$this->db->order_by('kode_lokasi', 'ASC');
		$this->db->from('peta_lokasi');
		return $this->db->get();
	}

	public function insert() {
		$data =[
			'id_lokasi' 	=> htmlspecialchars($this->input->post('id_lokasi', TRUE)),
			'kode_lokasi'	=> htmlspecialchars($this->input->post('kode_lokasi', TRUE))
		];
		$this->db->insert('peta_lokasi', $data);
	}

	public function update() {
		$data =[
			'kode_lokasi'	=> htmlspecialchars($this->input->post('kode_lokasi', TRUE))
		];

		$id =[
			'id_lokasi'		=> htmlspecialchars($this->input->post('id_lokasi', TRUE))
		];
		$this->db->where($id)->update('peta_lokasi', $data);
	}

	public function delete($id) {
		$this->db->delete('peta_lokasi', ['id_lokasi' => $id]);
	}
}