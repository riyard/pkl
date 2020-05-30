<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profilpegawai extends CI_Controller {
	
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
		$this->load->view('edit_profilpegawai');
	}

	public function edit()
	{
		
		$id_Karyawan = $this->input->post("id_Karyawan");
		$Nama = $this->input->post("Nama");
		$Email = $this->input->post("Email");
		$Password = $this->input->post("Password");
		$Alamat = $this->input->post("Alamat");
		$NoHp = $this->input->post("NoHp");
		$NIP = $this->input->post("NIP");
		$Level = $this->input->post("Level");
		
		echo $id_Karyawan;
		echo $Nama;
		echo $Email;
		echo $Password;
		echo $Alamat;
		echo $NoHp;
		echo $NIP;
		echo $Level;
		
		$data = array(
		"id_Karyawan"=>$id_Karyawan,
		"Nama"=>$Nama,
		"Email"=>$Email,
		"Password"=>$Password,
		"Alamat"=>$Alamat,
		"NoHp"=>$NoHp,
		"NIP"=>$NIP,
		"Level"=>$Level);
		$this->db->where("id_Karyawan",$id_Karyawan)->update("karyawan_master",$data);
		
		
        $this->session->set_userdata('Nama', $Nama);
        $this->session->set_userdata('Email', $Email);
        $this->session->set_userdata('Password', $Password);
        $this->session->set_userdata('Alamat', $Alamat);
        $this->session->set_userdata('NoHp', $NoHp);
        $this->session->set_userdata('NIP', $NIP);

        /*$session->push('customer',
        	['nama'=>$nama], 
        	['Email'=>$Email], 
        	['Password'=>$Password], 
        	['Alamat'=>$Alamat], 
        	['NoHp'=>$NoHp], 
        	['NIK'=>$NIK]
        );*/

		redirect(base_url()."index.php/profil_pegawai");

		
	}

}