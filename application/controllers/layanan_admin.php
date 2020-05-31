<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_admin extends CI_Controller {
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
		$datalayanan = $this->db->get("layanan")->result();
		$data = array(
			'form' => 'layanan_admin',
			'layanan' => $datalayanan

		);
		//var_dump($datalayanan);
		$this->load->view('layanan_admin',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahlayanan_admin'
			
		);
		$this->load->view('tambahlayanan_admin',$data);
	}

		public function insert()
	{
		$Nama_Layanan = $this->input->post("Nama_Layanan");
		$Kapasitas = $this->input->post("Kapasitas");
		$Harga = $this->input->post("Harga");
		echo $Nama_Layanan;
		echo $Kapasitas;
		echo $Harga;
		$data = array(
		"Nama_Layanan"=>$Nama_Layanan,
		"Kapasitas"=>$Kapasitas,
		"Harga"=>$Harga,);
		$this->db->insert("layanan",$data);
		redirect(base_url()."index.php/layanan_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$layanan=$this->db->get_where("layanan",array("id_Layanan"=>$id))->row();
		$data = array(
			'form' => 'editlayanan_admin',
			'layanan' => $layanan 
		);
		$this->load->view('editlayanan_admin',$data);
	}

	public function update()
	{
		$id=$this->input->post("id_Layanan");
		$Nama_Layanan = $this->input->post("Nama_Layanan");
		$Kapasitas = $this->input->post("Kapasitas");
		$Harga = $this->input->post("Harga");
		echo $Nama_Layanan;
		echo $Kapasitas;
		echo $Harga;
		$data = array(
		"Nama_Layanan"=>$Nama_Layanan,
		"Kapasitas"=>$Kapasitas,
		"Harga"=>$Harga,);
		$this->db->where("id_Layanan",$id)->update("layanan",$data);
		redirect(base_url()."index.php/layanan_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Layanan",$id)->delete('layanan');
		redirect(base_url()."index.php/layanan_admin");
	}

}