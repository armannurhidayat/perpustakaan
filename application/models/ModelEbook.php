<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelEbook extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_ebook', $id);
		}

		$this->db->join('klasifikasi_buku', 'klasifikasi_buku.id_klas = data_ebook.id_klas', 'LEFT');
		$this->db->select('*, data_ebook.created AS upload');
		$this->db->from('data_ebook');
		$this->db->order_by('kode_ebook', 'DESC');
		return $this->db->get();
	}

	public function insert($file_ebook) {
		$data =[
			'id_ebook' 		=> htmlspecialchars($this->input->post('id_ebook', TRUE)),
			'judul' 		=> htmlspecialchars($this->input->post('judul', TRUE)),
			'kode_ebook' 	=> htmlspecialchars($this->input->post('kode_ebook', TRUE)),
			'id_jenis' 		=> htmlspecialchars($this->input->post('id_jenis', TRUE)),
			'id_klas' 		=> htmlspecialchars($this->input->post('id_klas', TRUE)),
			'penulis' 		=> htmlspecialchars($this->input->post('penulis', TRUE)),
			'file_ebook' 	=> $file_ebook,
			'created' 		=> date('Y-m-d'),
			'keterangan' 	=> htmlspecialchars($this->input->post('keterangan', TRUE))
		];
		$this->db->insert('data_ebook', $data);
	}

	public function delete($id) {
		$this->db->delete('data_ebook', ['id_ebook' => $id]);
	}

	public function kodeEbook() {
	    $this->db->select('Right(data_ebook.kode_ebook,2) as kode_ebook', FALSE);
	    $this->db->order_by('kode_ebook','DESC');
	    $this->db->limit(1);
	    $query = $this->db->get('data_ebook');
	        if($query->num_rows() <> 0){
	            $data = $query->row();
	            $kode = intval($data->kode_ebook) + 1;
	        } else {
	            $kode = 1;
	        }

        $date = date('Ymd');
	    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
	    $kodehasil = "EB-".$date.$kodemax;
	    return $kodehasil;
	}
}