<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoice_customer extends CI_Controller {
	public function index()
	{
		$this->load->view('invoice_customer');
	}
}