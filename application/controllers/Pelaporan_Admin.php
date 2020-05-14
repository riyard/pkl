<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaporan_Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('Pelaporan_Admin');
	}
}