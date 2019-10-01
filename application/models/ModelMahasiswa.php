<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;

class ModelMahasiswa extends CI_Model {

	private $_client;

	function __construct() {
		parent::__construct();
		$this->_client = new Client;
	}

	public function select() {
		$response	= $this->_client->request('GET', 'http://localhost/absensi/api/mahasiswa');
		$result 	= json_decode($response->getBody()->getContents(), true);

		return $result['mahasiswa'];
	}

	public function MahasiswaId($id) {
		$response	= $this->_client->request('GET', 'http://localhost/absensi/api/mahasiswa/?id='.$id);
		$result 	= json_decode($response->getBody()->getContents(), true);

		return $result['mahasiswa'][0];
	}
}