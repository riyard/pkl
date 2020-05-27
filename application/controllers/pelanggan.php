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
			'customer' => $datapelanggan

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
		$id_Customer = $this->input->post("id_Customer");
		$NIK = $this->input->post("NIK");
		$nama = $this->input->post("nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Nama_JenisFile = $this->input->post("Nama_JenisFile");
		$Jenis_Pelanggan = $this->input->post("Jenis_Pelanggan");
		$Status = $this->input->post("Status");
		echo $id_Customer;
		echo $NIK;
		echo $nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Nama_JenisFile;
		echo $Jenis_Pelanggan;
		echo $Status;
		$data = array(
		"id_Customer"=>$id_Customer,
		"NIK"=>$NIK,
		"nama"=>$nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Nama_JenisFile"=>$Nama_JenisFile,
		"Jenis_Pelanggan"=>$Jenis_Pelanggan,
		"Status"=>$Status,);
		$this->db->insert("customer",$data);
		redirect(base_url()."index.php/pelanggan");

	}

	// 	public function edit()
	// {
	// 	$id=$this->uri->segment(3);
	// 	$datapelanggan=$this->db->get_where("customer",array("id_Customer"=>$id))->row();
	// 	$data = array(
	// 		'form' => 'editpelanggan_admin',
	// 		'customer' => $datapelanggan
	// 	);
	// 	$this->load->view('editpelanggan_admin',$data);
	// }

	public function update()
	{
		$id = $this->input->post("id_Customer");
		$id_Customer = $this->input->post("id_Customer");
		$NIK = $this->input->post("NIK");
		$nama = $this->input->post("nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$NoHp = $this->input->post("NoHp");
		$Alamat = $this->input->post("Alamat");
		$Nama_JenisFile = $this->input->post("Nama_JenisFile");
		$Jenis_Pelanggan = $this->input->post("Jenis_Pelanggan");
		$Status = $this->input->post("Status");
		echo $id_Customer;
		echo $NIK;
		echo $nama;
		echo $Email;
		echo $Password;
		echo $NoHp;
		echo $Alamat;
		echo $Nama_JenisFile;
		echo $Jenis_Pelanggan;
		echo $Status;
		$data = array(
		"id_Customer"=>$id_Customer,
		"NIK"=>$NIK,
		"nama"=>$nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"NoHp"=>$NoHp,
		"Alamat"=>$Alamat,
		"Nama_JenisFile"=>$Nama_JenisFile,
		"Jenis_Pelanggan"=>$Jenis_Pelanggan,
		"Status"=>$Status,);
		$this->db->where("id_Customer",$id)->update("customer",$data);
		redirect(base_url()."index.php/pelanggan");
	}

	// public function delete()
	// {
	// 	$id=$this->uri->segment(3);

	// 	$this->db->where("id_Customer",$id)->delete('customer');
	// 	redirect(base_url()."index.php/pelanggan");
	// }
}