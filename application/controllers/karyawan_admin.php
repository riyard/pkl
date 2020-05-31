<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_admin extends CI_Controller {
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
		$datakaryawan = $this->db->get("karyawan_master")->result();
		$data = array(
			'form' => 'karyawan_admin',
			'karyawan_master' => $datakaryawan

		);
		//var_dump($datakaryawan);
		$this->load->view('karyawan_admin',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahkaryawan_admin'
			
		);
		$this->load->view('tambahkaryawan_admin',$data);
	}

		public function insert()
	{
		$id_Karyawan = $this->input->post("id_Karyawan");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$Level = $this->input->post("Level");
		
		$data = array(
		"id_Karyawan"=>$id_Karyawan,
		"Email"=>$Email,
		"Password"=>$Password,
		"Level"=>$Level,);
		$this->db->insert("karyawan_master",$data);
		redirect(base_url()."index.php/karyawan_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$datakaryawan=$this->db->get_where("karyawan_master",array("id_Karyawan"=>$id))->row();
		$data = array(
			'form' => 'editkaryawan_admin',
			'karyawan_master' => $datakaryawan
		);
		$this->load->view('editkaryawan_admin',$data);
	}

	public function update()
	{
		$id = $this->input->post("id_Karyawan");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$NIP = $this->input->post("NIP");
		$Nama = $this->input->post("Nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Level = $this->input->post("Level");

		$data = array(
		"id_Karyawan"=>$id_Karyawan,
		"NIP"=>$NIP,
		"Nama"=>$Nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Level"=>$Level,);
		$this->db->where("id_Karyawan",$id)->update("karyawan_master",$data);
		redirect(base_url()."index.php/karyawan_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Karyawan",$id)->delete('karyawan_master');
		redirect(base_url()."index.php/karyawan_admin");
	}
}