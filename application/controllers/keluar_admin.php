<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar_admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->helper('url','form','html');		
		if($this->session->userdata('status')!="login"){
			redirect(base_url("login"));
		}
 
	}
	public function index()
	{
		$this->load->view('keluar_admin');
	}
}