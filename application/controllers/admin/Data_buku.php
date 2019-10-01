<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_buku extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']	= "Data Buku";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['buku']	= $this->ModelBuku->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/buku/index', $data);
		$this->load->view('admin/template/__footer');
	}

	public function tambah() {
		$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'trim|required');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isbn', 'ISBN', 'trim|required');
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
		$this->form_validation->set_rules('id_lokasi', 'Lokasi Simpan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= "Tambah Data Buku";
			$data['uuid']		= $this->uuid->v4();
			$id_user 			= $this->session->userdata('id');
			$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['kodebuku']	= $this->ModelBuku->kodeBuku();
			$data['jenis']		= $this->ModelBacaan->select()->result_array();
			$data['klasifikasi']= $this->ModelKlasifikasi->select()->result_array();
			$data['lokasi']		= $this->ModelLokasi->select()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/buku/addBuku', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelBuku->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Menambahkan data buku.');
			}
			redirect('admin/data_buku');
		}
	}

	public function update() {
		$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'trim|required');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isbn', 'ISBN', 'trim|required');
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
		$this->form_validation->set_rules('id_lokasi', 'Lokasi Simpan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$id 				= $this->uri->segment(4);
			$data['title'] 		= "Update Data Buku";
			$id_user 			= $this->session->userdata('id');
			$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['jenis']		= $this->ModelBacaan->select()->result_array();
			$data['klasifikasi']= $this->ModelKlasifikasi->select()->result_array();
			$data['lokasi']		= $this->ModelLokasi->select()->result_array();
			$data['buku']		= $this->ModelBuku->select($id)->row_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/buku/editBuku', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelBuku->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Memperbarui data buku.');
			}
			redirect('admin/data_buku');
		}
	}

	public function delete() {
		$id = $this->uri->segment(4);

		$this->ModelBuku->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Menghapus data buku.');
		}
		redirect('admin/data_buku');
	}
}