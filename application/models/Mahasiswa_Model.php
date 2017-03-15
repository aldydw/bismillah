<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataMahasiswa()
		{
			$query = $this->db->get('mahasiswa');
			return $query->result();
		}

		public function getAbsenByMahasiswa($idmahasiswa)
		{
			$this->db->where('id_mahasiswa', $idmahasiswa);
			$query = $this->db->get('absen');
			return $query->result();
		}

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>