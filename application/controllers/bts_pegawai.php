<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bts_pegawai extends CI_Controller {
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
		$databts = $this->db->get("bts")->result();
		$data = array(
			'form' => 'bts_pegawai',
			'bts' => $databts

		);
		//var_dump($databts);
		$this->load->view('bts_pegawai',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahbts_pegawai'
			
		);
		$this->load->view('tambahbts_pegawai',$data);
	}

		public function insert()
	{
		$Koordinat = $this->input->post("Koordinat");
		$KodePelanggan_PLN = $this->input->post("KodePelanggan_PLN");
		$Nama_PIC = $this->input->post("Nama_PIC");
		$NoHp_PIC = $this->input->post("NoHp_PIC");
		echo $Koordinat;
		echo $KodePelanggan_PLN;
		echo $Nama_PIC;
		echo $NoHp_PIC;
		$data = array(
		"Koordinat"=>$Koordinat,
		"KodePelanggan_PLN"=>$KodePelanggan_PLN,
		"Nama_PIC"=>$Nama_PIC,
	    "NoHp_PIC"=>$NoHp_PIC,);
		$this->db->insert("bts",$data);
		redirect(base_url()."index.php/bts_pegawai");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$bts=$this->db->get_where("bts",array("id_bts"=>$id))->row();
		$data = array(
			'form' => 'editbts_pegawai',
			'bts' => $bts 
		);
		$this->load->view('editbts_pegawai',$data);
	}

	public function update()
	{
		$id=$this->input->post("id_bts");
		$Koordinat = $this->input->post("Koordinat");
		$KodePelanggan_PLN = $this->input->post("KodePelanggan_PLN");
		$Nama_PIC = $this->input->post("Nama_PIC");
		$NoHp_PIC = $this->input->post("NoHp_PIC");
		echo $Koordinat;
		echo $KodePelanggan_PLN;
		echo $Nama_PIC;
		echo $NoHp_PIC;
		$data = array(
		"Koordinat"=>$Koordinat,
		"KodePelanggan_PLN"=>$KodePelanggan_PLN,
		"Nama_PIC"=>$Nama_PIC,
	    "NoHp_PIC"=>$NoHp_PIC,);
		$this->db->where("id_bts",$id)->update("bts",$data);
		redirect(base_url()."index.php/bts_pegawai");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_bts",$id)->delete('bts');
		redirect(base_url()."index.php/bts_pegawai");
	}

}