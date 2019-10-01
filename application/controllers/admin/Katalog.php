<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function buku() {
		$data['title']	= "Katalog Buku";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['buku']	= $this->ModelBuku->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/katalog/katalog_buku', $data);
		$this->load->view('admin/template/__footer');
	}

	public function ebook() {
		$data['title']	= "Katalog Ebook";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['ebook']	= $this->ModelEbook->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/katalog/katalog_ebook', $data);
		$this->load->view('admin/template/__footer');
	}
}