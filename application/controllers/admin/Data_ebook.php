<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ebook extends CI_Controller {

	function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect(base_url());
		}
	}

	public function index() {
		$data['title']	= "Data Ebook";
		$id_user 		= $this->session->userdata('id');
		$data['user']	= $this->db->get_where('user', ['id' => $id_user])->row_array();
		$data['ebook']	= $this->ModelEbook->select()->result_array();

		$this->load->view('admin/template/__header', $data);
		$this->load->view('admin/ebook/index', $data);
		$this->load->view('admin/template/__footer');
	}

	public function tambah() {
		$this->form_validation->set_rules('kode_ebook', 'Kode Ebook', 'trim|required');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('id_jenis', 'Jenis Bacaan', 'trim|required');
		$this->form_validation->set_rules('id_klas', 'Klasifikasi', 'trim|required');

		$config['upload_path']		= './assets/file/ebook/';
		$config['allowed_types']	= 'pdf';
		$config['max_size']			= 10024;
		$config['file_name']		= 'ebook-' . date('ymd'). '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == FALSE) {
			$data['title']		= "Tambah Data Ebook";
			$data['uuid']		= $this->uuid->v4();
			$id_user 			= $this->session->userdata('id');
			$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
			$data['kodebuku']	= $this->ModelEbook->kodeEbook();
			$data['jenis']		= $this->ModelBacaan->select()->result_array();
			$data['klasifikasi']= $this->ModelKlasifikasi->select()->result_array();

			$this->load->view('admin/template/__header', $data);
			$this->load->view('admin/ebook/addEbook', $data);
			$this->load->view('admin/template/__footer');

		} else {

			if (! $this->upload->do_upload('file_ebook')) {
				$data['title']		= "Tambah Data Ebook";
				$data['uuid']		= $this->uuid->v4();
				$id_user 			= $this->session->userdata('id');
				$data['user']		= $this->db->get_where('user', ['id' => $id_user])->row_array();
				$data['kodebuku']	= $this->ModelEbook->kodeEbook();
				$data['jenis']		= $this->ModelBacaan->select()->result_array();
				$data['klasifikasi']= $this->ModelKlasifikasi->select()->result_array();

				$this->load->view('admin/template/__header', $data);
				$this->load->view('admin/ebook/addEbook', $data);
				$this->load->view('admin/template/__footer');

			} else {

				$data = $this->upload->data();
				$file_ebook = $data['file_name'];

				$this->ModelEbook->insert($file_ebook);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Menambahkan data Ebook.');
				}
				redirect('admin/data_ebook');
			}
		}
	}

	public function delete() {
		$id = $this->uri->segment(4);
        $data = $this->ModelEbook->select($id)->row();
        $nama = 'assets/file/ebook/' . $data->file_ebook;

        if (empty($id)) {
        	redirect('admin/data_ebook');

        } else {

	        if (is_readable($nama) && unlink($nama)) {
	            $this->ModelEbook->delete($id);
	            $this->session->set_flashdata('success', 'Menghapus data ebook.');
	            redirect('admin/data_ebook');

        	} else {

	            $this->session->set_flashdata('error', 'Menghapus data ebook.');
	            redirect('admin/data_ebook');
        	}
        }
	}

	public function baca() {
		$id = $this->uri->segment(4);
		$data['ebook'] = $this->ModelEbook->select($id)->row_array();

		$this->load->view('admin/ebook/showPDF', $data);
	}

}