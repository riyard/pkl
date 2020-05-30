<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_login($Email,$Password)
	{
		return $this->db
			->select('id_Customer, id_Karyawan, nama, NoHp, Jenis_Pelanggan, Status, Alamat, NIK, Email, Password')
			->where('Email', $Email)
			->where('Password', $Password)
			->limit(1)
			->get('customer');
	}
	
}