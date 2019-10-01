<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTransaksi extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_pinjam', $id);
		}

		$this->db->select('*, data_buku.jumlah AS jumlah_buku, peminjaman.jumlah AS jumlah_pinjam');
		$this->db->join('data_buku', 'data_buku.id_buku = peminjaman.id_buku', 'LEFT');
		// $this->db->group_by('kode_pinjam');
		$this->db->from('peminjaman');
		return $this->db->get();
	}

	public function kodePinjam() {
	    $this->db->select('Right(peminjaman.kode_pinjam,2) as kode_pinjam', FALSE);
	    $this->db->order_by('kode_pinjam','DESC');
	    $this->db->limit(1);
	    $query = $this->db->get('peminjaman');
	        if($query->num_rows() <> 0){
	            $data = $query->row();
	            $kode = intval($data->kode_pinjam) + 1;
	        } else {
	            $kode = 1;
	        }

        $date = date('Ymd');
	    $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
	    $kodehasil = "TRX-".$date.$kodemax;
	    return $kodehasil;
	}

	public function save_batch($data) {
		return $this->db->insert_batch('peminjaman', $data);
	}
}