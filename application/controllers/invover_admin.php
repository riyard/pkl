<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invover_admin extends CI_Controller {
	public function index()
	{
		$this->load->view('invover_admin');
	}
}