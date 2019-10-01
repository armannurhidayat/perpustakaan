<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('login/admin');
	}

	public function prosesLogin() {
		if(isset($_POST['login'])) {
			$user = $this->input->post('username', TRUE);
			$pass = $this->input->post('password', TRUE);

			$cek = $this->db->get_where('user', ['username' => $user])->row_array();

			// Jika username ada
			if ($cek > 0) {

				// Jika username dan password benar
				if (password_verify($pass, $cek['password'])) {

					// Jika level admin
					if ($cek['level'] == 1) {
						$data =[
							'id' 		=> $cek['id'],
							'username'	=> $cek['username']
						];
						$this->session->set_userdata($data);
						$this->session->set_flashdata('success', 'Login berhasil.');
						redirect('admin/home');
					}

				} else {
					$this->session->set_flashdata('error', 'Username/password salah.');
					redirect(base_url());
				}

			} else {
				$this->session->set_flashdata('error', 'Username tidak terdaftar.');
				redirect(base_url());
			}
		}

		if (!$this->session->logged_in) {
			redirect(base_url());
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('success', 'Logout.');
		redirect(base_url());
	}

}