<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keluar_pegawai extends CI_Controller {
	public function index()
	{
		$this->load->view('keluar_pegawai');
	}
}