<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invover_admin extends CI_Controller {
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
		$datainvoice = $this->db->get("invoice")->result();
		$data = array(
			'form' => 'invover_admin',
			'invoice' => $datainvoice

		);
		//var_dump($datainvoice);
		$this->load->view('invover_admin',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahinvoiceadmin'
			
		);
		$this->load->view('tambahinvoiceadmin',$data);
	}

		public function insert()
	{
		$No_Faktur = $this->input->post("No_Faktur");
		$id_Customer = $this->input->post("id_Customer");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$id_Detail_Invoice = $this->input->post("id_Detail_Invoice");
		$Tanggal = $this->input->post("Tanggal");
		$Tgl_JatuhTempo = $this->input->post("Tgl_JatuhTempo");
		$Sub_Total = $this->input->post("Sub_Total");
		$Status_Ppn = $this->input->post("Status_Ppn");
		$Ppn = $this->input->post("Ppn");
		$Total = $this->input->post("Total");
		$Status_Lunas = $this->input->post("Status_Lunas");

		$data = array(
		"No_Faktur"=>$No_Faktur,
		"id_Customer"=>$id_Customer,
		"id_Karyawan"=>$id_Karyawan,
		"id_Detail_Invoice"=>$id_Detail_Invoice,
		"Tanggal"=>$Tanggal,
		"Tgl_JatuhTempo"=>$Tgl_JatuhTempo,
		"Sub_Total"=>$Sub_Total,
		"Status_Ppn"=>$Status_Ppn,
		"Ppn"=>$Ppn,
		"Total"=>$Total,
		"Status_Lunas"=>$Status_Lunas,);
		$this->db->insert("invoice",$data);
		redirect(base_url()."index.php/invover_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$datainvoice=$this->db->get_where("invoice",array("No_Faktur"=>$id))->row();
		$data = array(
			'form' => 'editinvoiceadmin',
			'invoice' => $datainvoice
		);
		$this->load->view('editinvoiceadmin',$data);
	}

	public function update()
	{
		$id = $this->input->post("No_Faktur");
		$No_Faktur = $this->input->post("No_Faktur");
		$id_Customer = $this->input->post("id_Customer");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$id_Detail_Invoice = $this->input->post("id_Detail_Invoice");
		$Tanggal = $this->input->post("Tanggal");
		$Tgl_JatuhTempo = $this->input->post("Tgl_JatuhTempo");
		$Sub_Total = $this->input->post("Sub_Total");
		$Status_Ppn = $this->input->post("Status_Ppn");
		$Ppn = $this->input->post("Ppn");
		$Total = $this->input->post("Total");
		$Status_Lunas = $this->input->post("Status_Lunas");

		$data = array(
		"No_Faktur"=>$No_Faktur,
		"id_Customer"=>$id_Customer,
		"id_Karyawan"=>$id_Karyawan,
		"id_Detail_Invoice"=>$id_Detail_Invoice,
		"Tanggal"=>$Tanggal,
		"Tgl_JatuhTempo"=>$Tgl_JatuhTempo,
		"Sub_Total"=>$Sub_Total,
		"Status_Ppn"=>$Status_Ppn,
		"Ppn"=>$Ppn,
		"Total"=>$Total,
		"Status_Lunas"=>$Status_Lunas,);
		$this->db->where("No_Faktur",$id)->update("invoice",$data);
		redirect(base_url()."index.php/invover_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("No_Faktur",$id)->delete('invoice');
		redirect(base_url()."index.php/invover_admin");
	}
}