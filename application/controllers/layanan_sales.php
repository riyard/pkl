<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layanan_sales extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datalayanan = $this->db->get("layanan")->result();
		$data = array(
			'form' => 'layanan_sales',
			'layanan' => $datalayanan

		);
		var_dump($datalayanan);
		$this->load->view('layanan_sales',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahlayanan_sales'
			
		);
		$this->load->view('tambahlayanan_sales',$data);
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
		redirect(base_url()."index.php/layanan_sales");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$layanan=$this->db->get_where("layanan",array("id_Layanan"=>$id))->row();
		$data = array(
			'form' => 'editlayanan_sales',
			'layanan' => $layanan 
		);
		$this->load->view('editlayanan_sales',$data);
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
		redirect(base_url()."index.php/layanan_sales");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Layanan",$id)->delete('layanan');
		redirect(base_url()."index.php/layanan_sales");
	}

}