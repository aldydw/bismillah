<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('Mahasiswa_Model');
		$data['siswa'] = $this->Mahasiswa_Model->getDataMahasiswa();
		$this->load->view('mahasiswa', $data);
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */