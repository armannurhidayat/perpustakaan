<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi_buku extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title'] 		 = "Klasifikasi Buku";
		$id_user 		 	 = $this->session->userdata('id');
		$data['user']		 = $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['klasifikasi'] = $this->ModelKlasifikasi->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/klasifikasi/index', $data);
		$this->load->view('admin/template/__footer');
	}

	public function tambah() {
		$this->form_validation->set_rules('nama_klas', 'Nama Klasifikasi', 'trim|required|is_unique[klasifikasi_buku.nama_klas]');
		$this->form_validation->set_rules('kode_klas', 'Kode Klasifikasi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['uuid'] 		= $this->uuid->v4();
			$data['title'] 		= "Tambah Klasifikasi Buku";
			$id_user 		 	= $this->session->userdata('id');
			$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['kodeklas'] 	= $this->ModelKlasifikasi->kodeKlas();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/klasifikasi/addKlasifikasi', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelKlasifikasi->insert();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Menambahkan data klasifikasi buku.');
			} else {
				$this->session->set_flashdata('error', 'Menambahkan data klasifikasi buku.');
			}
			redirect('admin/klasifikasi_buku');
		}
	}

	public function update() {
		$this->form_validation->set_rules('nama_klas', 'Nama Klasifikasi', 'trim|required|callback_checkNamaKlas');
		$this->form_validation->set_rules('kode_klas', 'Kode Klasifikasi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$id 				= $this->uri->segment(4);
			$data['title'] 		= "Tambah Klasifikasi Buku";
			$id_user 		 	= $this->session->userdata('id');
			$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['klasifikasi']= $this->ModelKlasifikasi->select($id)->row_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/klasifikasi/editKlasifikasi', $data);
			$this->load->view('admin/template/__footer');

		} else {

			$this->ModelKlasifikasi->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Memperbarui data klasifikasi buku.');
			}
			redirect('admin/klasifikasi_buku');
		}
	}

	public function checkNamaKlas() {
        $post 	= $this->input->post(null, TRUE);
        $query	= $this->db->query("SELECT * FROM klasifikasi_buku WHERE nama_klas = '$post[nama_klas]' AND id_klas != '$post[id_klas]'");

        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('checkNamaKlas', '{field} sudah terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete() {
    	$id = $this->uri->segment(4);

    	$this->ModelKlasifikasi->delete($id);
    	if ($this->db->affected_rows() > 0) {
    		$this->session->set_flashdata('success', 'Menghapus data klasifikasi buku.');
    	}
    	redirect('admin/klasifikasi_buku');
    }
}