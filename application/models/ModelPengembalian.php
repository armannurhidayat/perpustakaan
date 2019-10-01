<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPengembalian extends CI_Model {

	public function select($id = null) {
		if ($id != null) {
			$this->db->where('id_kembali', $id);
		}

		$this->db->select('*, sum(denda) total_denda');
		$this->db->from('pengembalian');
		return $this->db->get();
	}

	public function insert($id, $rfid, $kode, $judul, $jumlah, $tanggal, $denda) {
		$data =[
			'rfid_mhs'		=> $rfid,
			'judul'			=> $judul,
			'kode_pinjam' 	=> $kode,
			'tanggal'		=> $tanggal,
			'jumlah'		=> $jumlah,
			'denda'			=> $denda
		];

		$this->db->insert('pengembalian', $data);
		$this->db->delete('peminjaman', ['id_pinjam' => $id]);
	}
}