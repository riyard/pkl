<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sales_admin extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datasales = $this->db->get("sales")->result();
		$data = array(
			'form' => 'sales_admin',
			'sales' => $datasales

		);
		var_dump($datasales);
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
		$id_Sales = $this->input->post("id_Sales");
		$NIP = $this->input->post("NIP");
		$Nama = $this->input->post("Nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Level = $this->input->post("Level");
		echo $id_Sales;
		echo $NIP;
		echo $Nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Level;
		$data = array(
		"id_Sales"=>$id_Sales,
		"NIP"=>$NIP,
		"Nama"=>$Nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Level"=>$Level,);
		$this->db->insert("sales",$data);
		redirect(base_url()."index.php/sales_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$datasales=$this->db->get_where("sales",array("id_Sales"=>$id))->row();
		$data = array(
			'form' => 'editsales_admin',
			'sales' => $datasales
		);
		$this->load->view('editsales_admin',$data);
	}

	public function update()
	{
		$id = $this->input->post("id_Sales");
		$id_Sales = $this->input->post("id_Sales");
		$NIP = $this->input->post("NIP");
		$Nama = $this->input->post("Nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Level = $this->input->post("Level");
		echo $id_Sales;
		echo $NIP;
		echo $Nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Level;
		$data = array(
		"id_Sales"=>$id_Sales,
		"NIP"=>$NIP,
		"Nama"=>$Nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Level"=>$Level,);
		$this->db->where("id_Sales",$id)->update("sales",$data);
		redirect(base_url()."index.php/sales_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Sales",$id)->delete('sales');
		redirect(base_url()."index.php/sales_admin");
	}
}