<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function index($idmahasiswa)
	{
		$this->load->model('Mahasiswa_Model');
		$data['absen'] = $this->Mahasiswa_Model->getAbsenByMahasiswa($idmahasiswa);
		$this->load->view('absen',$data);
	}

}

/* End of file Absen.php */
/* Location: ./application/controllers/Absen.php */