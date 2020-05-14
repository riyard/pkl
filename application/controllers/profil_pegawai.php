<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil_pegawai extends CI_Controller {
	public function index()
	{
		$this->load->view('profil_pegawai');
	}
}