<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_admin extends CI_Controller {
	public function index()
	{
		$this->load->view('profil_admin');
	}
}