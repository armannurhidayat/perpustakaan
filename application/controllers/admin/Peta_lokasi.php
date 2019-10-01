<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta_lokasi extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']	= "Peta Lokasi Buku";
		$id 			= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id])->row_array();
		$data['lokasi'] = $this->ModelLokasi->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/lokasi/index', $data);
		$this->load->view('admin/template/__footer');
	}

	public function tambah() {
		$this->form_validation->set_rules('kode_lokasi', 'Kode Lokasi', 'trim|required|is_unique[peta_lokasi.kode_lokasi]');

		if ($this->form_validation->run() == FALSE) {
			$data['title']	= "Tambah Lokasi Buku";
			$data['uuid']	= $this->uuid->v4();
			$id_user 		= $this->session->userdata('id');
			$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/lokasi/addLokasi', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelLokasi->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Menambahkan data lokasi buku.');
			}
			redirect('admin/peta_lokasi');
		}
	}

	public function update() {
		$this->form_validation->set_rules('kode_lokasi', 'Kode Lokasi', 'trim|required|callback_checkKodeLokasi');

		if ($this->form_validation->run() == FALSE) {
			$id 			= $this->uri->segment(4);
			$data['title']	= "Update Lokasi Buku";
			$id_user 		= $this->session->userdata('id');
			$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['lokasi'] = $this->ModelLokasi->select($id)->row_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/lokasi/editLokasi', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelLokasi->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Memperbarui data lokasi buku.');
			}
			redirect('admin/peta_lokasi');
		}
	}

	public function checkKodeLokasi() {
        $post 	= $this->input->post(null, TRUE);
        $query	= $this->db->query("SELECT * FROM peta_lokasi WHERE kode_lokasi = '$post[kode_lokasi]' AND id_lokasi != '$post[id_lokasi]'");

        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('checkKodeLokasi', '{field} sudah terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

	public function delete() {
		$id = $this->uri->segment(4);

		if (!empty($id)) {
			$this->ModelLokasi->delete($id);
			$this->session->set_flashdata('success', 'Menghapus data lokasi buku.');
		}
		redirect('admin/peta_lokasi');
	}
}