<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_admin extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datasales = $this->db->get("karyawan_master")->result();
		$data = array(
			'form' => 'sales_admin',
			'karyawan_master' => $datasales

		);
		//var_dump($datasales);
		$this->load->view('sales_admin',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahsales_admin'
			
		);
		$this->load->view('tambahsales_admin',$data);
	}

		public function insert()
	{
		$id_Karyawan = $this->input->post("id_Karyawan");
		$NIP = $this->input->post("NIP");
		$Nama = $this->input->post("Nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Level = $this->input->post("Level");
		echo $id_Karyawan;
		echo $NIP;
		echo $Nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Level;
		$data = array(
		"id_Karyawan"=>$id_Karyawan,
		"NIP"=>$NIP,
		"Nama"=>$Nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Level"=>$Level,);
		$this->db->insert("karyawan_master",$data);
		redirect(base_url()."index.php/sales_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$datasales=$this->db->get_where("karyawan_master",array("id_Karyawan"=>$id))->row();
		$data = array(
			'form' => 'editsales_admin',
			'karyawan_master' => $datasales
		);
		$this->load->view('editsales_admin',$data);
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
		echo $id_Karyawan;
		echo $NIP;
		echo $Nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Level;
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
		redirect(base_url()."index.php/sales_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Karyawan",$id)->delete('karyawan_master');
		redirect(base_url()."index.php/sales_admin");
	}
}