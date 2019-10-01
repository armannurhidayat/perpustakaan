<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']  	= "Data Mahasiswa";
		$id 				= $this->session->userdata('id');
		$data['user']		= $this->db->get_where('user', ['id' => $id])->row_array();
		$data['mahasiswa']	= $this->ModelMahasiswa->select();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/mahasiswa/index', $data);
		$this->load->view('admin/template/__footer');
	}

	public function detail() {
		$data['title']  	= "Detail Data Mahasiswa";
		$id 				= $this->uri->segment(4);
		$id_user 			= $this->session->userdata('id');
		$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['mahasiswa']	= $this->ModelMahasiswa->MahasiswaId($id);

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/mahasiswa/showMahasiswa', $data);
		$this->load->view('admin/template/__footer');

		if (empty($id)) {
			redirect('admin/mahasiswa');
		}
	}
}