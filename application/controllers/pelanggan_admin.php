<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_admin extends CI_Controller {
	public function index()
	{
		$this->load->view('pelanggan_admin');
	}
}