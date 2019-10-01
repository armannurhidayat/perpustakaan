<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBacaan extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_jenis', $id);
		}

		$this->db->select('*');
		$this->db->order_by('kode_jenis', 'DESC');
		$this->db->from('jenis_bacaan');
		return $this->db->get();
	}

	public function insert() {
		$data =[
			'id_jenis'		=> htmlspecialchars($this->input->post('id_jenis', TRUE)),
			'kode_jenis'	=> htmlspecialchars($this->input->post('kode_jenis', TRUE)),
			'nama_jenis'	=> htmlspecialchars($this->input->post('nama_jenis', TRUE))
		];

		$this->db->insert('jenis_bacaan', $data);
	}

	public function update() {
		$data =[
			'kode_jenis'	=> htmlspecialchars($this->input->post('kode_jenis', TRUE)),
			'nama_jenis'	=> htmlspecialchars($this->input->post('nama_jenis', TRUE))
		];

		$id =[
			'id_jenis'		=> htmlspecialchars($this->input->post('id_jenis', TRUE))
		];

		return $this->db->where($id)->update('jenis_bacaan', $data);
	}

	public function delete($id) {
		$this->db->delete('jenis_bacaan', ['id_jenis' => $id]);
	}

	public function kodeBacaan() {
	    $this->db->select('Right(jenis_bacaan.kode_jenis,2) as kode_jenis', FALSE);
	    $this->db->order_by('kode_jenis','DESC');
	    $this->db->limit(1);
	    $query = $this->db->get('jenis_bacaan');
	        if($query->num_rows() <> 0){
	            $data = $query->row();
	            $kode = intval($data->kode_jenis) + 1;
	        } else {
	            $kode = 1;
	        }

        $date = date('d');
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
	    $kodehasil = "BCA-".$date.$kodemax;
	    return $kodehasil;
	}

}