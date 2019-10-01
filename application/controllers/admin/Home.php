<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']		= "Dahsboard";
		$id_user 			= $this->session->userdata('id');
		$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['buku']		= $this->ModelBuku->select()->num_rows();
		$data['peminjam']	= $this->ModelTransaksi->select()->num_rows();
		$data['ebook']		= $this->ModelEbook->select()->num_rows();
		$data['denda']		= $this->ModelPengembalian->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('admin/template/__footer');
	}
}