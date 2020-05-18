<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datapelanggan = $this->db->get("customer")->result();
		$data = array(
			'form' => 'pelanggan',
			'pelanggan' => $datapelanggan

		);
		var_dump($datapelanggan);
		$this->load->view('pelanggan',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahpelanggan'
			
		);
		$this->load->view('tambahpelanggan',$data);
	}

		public function insert()
	{
		$nama = $this->input->post("nama");
		$Alamat = $this->input->post("Alamat");
		$NoHp = $this->input->post("NoHp");
		$Email = $this->input->post("Email");
		$Password = md5($this->input->post("Password"));
		echo $nama;
		echo $Alamat;
		echo $NoHp;
		echo $Email;
		echo $Password;
		$data = array(
		"nama"=>$nama,
		"Alamat"=>$Alamat,
		"NoHp"=>$NoHp,
		"Email"=>$Email, 
		"Password"=>$Password,);
		$this->db->insert("customer",$data);
		redirect(base_url()."index.php/pelanggan");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$pelanggan=$this->db->get_where("customer",array("id_Customer"=>$id))->row();
		$data = array(
			'form' => 'editpelanggan',
			'pelanggan' => $pelanggan 
		);
		$this->load->view('editpelanggan',$data);
	}

	public function update()
	{
		$id=$this->input->post("id_Customer");
		$nama = $this->input->post("nama");
		$Alamat = $this->input->post("Alamat");
		$NoHp = $this->input->post("NoHp");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		echo $nama;
		echo $Alamat;
		echo $NoHp;
		echo $Email;
		echo $Password;
		$data = array(
		"nama"=>$nama,
		"Alamat"=>$Alamat,
		"NoHp"=>$NoHp,
		"Email"=>$Email, 
		"Password"=>$Password,);
		$this->db->where("id_Customer",$id)->update("customer",$data);
		redirect(base_url()."index.php/pelanggan");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Customer",$id)->delete('customer');
		redirect(base_url()."index.php/pelanggan");
	}


}
