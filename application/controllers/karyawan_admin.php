<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_admin extends CI_Controller {
	public function index()
	{
		$this->load->view('karyawan_admin');
	}
}