<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profilcustomer extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->helper('url','form','html');		
		if($this->session->userdata('status')!="login"){
			redirect(base_url("login_customer"));
		}
 
	}
	public function index()
	{
		$this->load->view('edit_profilcustomer');
	}

	public function edit()
	{
		$id_Customer = $this->input->post("id_Customer");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$nama = $this->input->post("nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$Alamat = $this->input->post("Alamat");
		$NoHp = $this->input->post("NoHp");
		$NIK = $this->input->post("NIK");
		$Jenis_Pelanggan = $this->input->post("Jenis_Pelanggan");
		$Status = $this->input->post("Status");
		echo $id_Customer;
		echo $id_Karyawan;
		echo $nama;
		echo $Email;
		echo $Password;
		echo $Alamat;
		echo $NoHp;
		echo $NIK;
		echo $Jenis_Pelanggan;
		echo $Status;
		$data = array(
		"id_Customer"=>$id_Customer,
		"id_Karyawan"=>$id_Karyawan,
		"nama"=>$nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"Alamat"=>$Alamat,
		"NoHp"=>$NoHp,
		"NIK"=>$NIK,
		"Jenis_Pelanggan"=>$Jenis_Pelanggan,
		"Status"=>$Status);
		$this->db->where("id_Customer",$id_Customer)->update("customer",$data);
		
		
        $this->session->set_userdata('nama', $nama);
        $this->session->set_userdata('Email', $Email);
        $this->session->set_userdata('Password', $Password);
        $this->session->set_userdata('Alamat', $Alamat);
        $this->session->set_userdata('NoHp', $NoHp);
        $this->session->set_userdata('NIK', $NIK);

        /*$session->push('customer',
        	['nama'=>$nama], 
        	['Email'=>$Email], 
        	['Password'=>$Password], 
        	['Alamat'=>$Alamat], 
        	['NoHp'=>$NoHp], 
        	['NIK'=>$NIK]
        );*/

		redirect(base_url()."index.php/profil_customer");

		
	}

}