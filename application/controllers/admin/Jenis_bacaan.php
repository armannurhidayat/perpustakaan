<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_bacaan extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']	= "Jenis Bacaan";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['bacaan'] = $this->ModelBacaan->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/bacaan/index', $data);
		$this->load->view('admin/template/__footer');
	}


	public function tambah() {
		$this->form_validation->set_rules('nama_jenis', 'Jenis Bacaan', 'trim|required');
		$this->form_validation->set_rules('kode_jenis', 'Kode Jenis Bacaan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['uuid']	= $this->uuid->v4();
			$data['title']	= "Tambah Jenis Bacaan";
			$id_user 		= $this->session->userdata('id');
			$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['kodebacaan'] = $this->ModelBacaan->kodebacaan();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/bacaan/addBacaan', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelBacaan->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Menambahkan data jenis bacaan.');
			}
			redirect('admin/jenis_bacaan');
		}
	}

	public function update() {
		$this->form_validation->set_rules('nama_jenis', 'Jenis Bacaan', 'trim|required');
		$this->form_validation->set_rules('kode_jenis', 'Kode Jenis Bacaan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->uri->segment(4);
			$id_user 		= $this->session->userdata('id');
			$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['bacaan']	= $this->ModelBacaan->select($id)->row_array();
			$data['title']	= "Update Jenis Bacaan";

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/bacaan/editBacaan', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelBacaan->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Memperbarui data jenis bacaan.');
			}
			redirect('admin/jenis_bacaan');
		}
	}


	public function delete() {
		$id = $this->uri->segment(4);

		if (!empty($id)) {
			$this->ModelBacaan->delete($id);
			$this->session->set_flashdata('success', 'Menghapus data jenis bacaan.');
		}
		redirect('admin/jenis_bacaan');
	}
}