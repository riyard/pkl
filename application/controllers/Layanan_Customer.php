<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_customer extends CI_Controller {
	public function index()
	{
		$this->load->view('layanan_customer');
	}
}