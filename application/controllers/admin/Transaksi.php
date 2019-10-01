<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	// Data Pinjam
	public function data_pinjam() {
		$data['title']	= "Transaksi Data Pinjam";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['pinjam'] = $this->ModelTransaksi->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/transaksi/index', $data);
		$this->load->view('admin/template/__footer');
	}


	// Form Peminjaman
	public function form_pinjam() {
		$data['title']	= "Transaksi Form Peminjaman";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/transaksi/formTransaksi', $data);
		$this->load->view('admin/template/__footer');
	}

	public function searchMahasiswa() {
		$data['title']  	= "Detail Data Mahasiswa";
		$id 				= $this->input->get('rfid');
		$id_user 			= $this->session->userdata('id');
		$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['mahasiswa']	= $this->ModelMahasiswa->MahasiswaId($id);
		$data['kodepinjam'] = $this->ModelTransaksi->kodePinjam();
		$data['buku'] 		= $this->ModelBuku->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/transaksi/formPeminjaman', $data);
		$this->load->view('admin/template/__footer');
	}

	public function insertPinjam() {
		$kode 		= $_GET['kode'];
		$rfid		= $_GET['rfid'];
		$tanggal	= $_GET['tanggal'];
		$jam 		= $_GET['jam'];
		$tempo 		= $_GET['tempo'];
		$buku 		= $_GET['buku'];
		$jumlah 	= $_GET['jumlah'];
		$data 		= [];

		$index 	= 0;
		if (is_array($buku) || is_object($buku)) {
			foreach ($buku as $value) {
				array_push($data, [
					'kode_pinjam'	=> $kode,
					'rfid_mhs'		=> $rfid,
					'id_buku'		=> $buku[$index],
					'tanggal'		=> $tanggal,
					'jam'			=> $jam,
					'jatuh_tempo'	=> $tempo,
					'jumlah'		=> $jumlah
				]);

				$index++;
			}
		}

		$response = $this->ModelTransaksi->save_batch($data);
		if (!$response) {
			echo "Data gagal ditambahkan";
			return FALSE;

		} else {

			echo "Data berhasil ditambahkan!";
			return TRUE;
		}
	}

	public function Pengembalian() {
		$id 		= $_GET['id'];
		$rfid 		= $_GET['rfid'];
		$kode 		= $_GET['kode'];
		$judul 		= $_GET['judul'];
		$jumlah 	= $_GET['jumlah'];
		$tanggal 	= $_GET['tanggal'];
		$denda 		= $_GET['denda'];

		$this->ModelPengembalian->insert($id, $rfid, $kode, $judul, $jumlah, $tanggal, $denda);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Mengembalikan buku.');
		}
		redirect('transaksi/data_pinjam');
	}
}