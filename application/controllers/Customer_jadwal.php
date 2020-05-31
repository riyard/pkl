<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_jadwal extends CI_Controller {
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
		$datacustomerjadwal = $this->db->get("customer_jadwal")->result();
		$data = array(
			'form' => 'Customer_Jadwal',
			'customer_jadwal' => $datacustomerjadwal

		);
		//var_dump($datacustomerjadwal);
		$this->load->view('customer_jadwal',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahcustomerjadwal'
			
		);
		$this->load->view('tambahcustomerjadwal',$data);
	}

		public function insert()
	{
		$Tgl_Pemasangan = $this->input->post("Tgl_Pemasangan");
		$Jenis_Visit = $this->input->post("Jenis_Visit");
		$Status = $this->input->post("Status");

		$data = array(
		"Tgl_Pemasangan"=>$Tgl_Pemasangan,
		"Jenis_Visit"=>$Jenis_Visit,
		"Status"=>$Status,);
		$this->db->insert("customer_jadwal",$data);
		redirect(base_url()."index.php/customer_jadwal");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$customer_jadwal=$this->db->get_where("customer_jadwal",array("id_Customer_Jadwal"=>$id))->row();
		$data = array(
			'form' => 'editcustomerjadwal',
			'customer_jadwal' => $customer_jadwal 
		);
		$this->load->view('editcustomerjadwal',$data);
	}

	public function update()
	{
		$id_Customer_Jadwal = $this->input->post("id_Customer_Jadwal");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$Tgl_Pemasangan = $this->input->post("Tgl_Pemasangan");
		$Jenis_Visit = $this->input->post("Jenis_Visit");
		$Status = $this->input->post("Status");
		
		$data = array(
		"Tgl_Pemasangan"=>$Tgl_Pemasangan,
		"Jenis_Visit"=>$Jenis_Visit,
		"Status"=>$Status,);
		$this->db->where("id_Customer_Jadwal",$id_Customer_Jadwal)->update("customer_jadwal",$data);
		redirect(base_url()."index.php/customer_jadwal");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Customer_Jadwal",$id)->delete('customer_jadwal');
		redirect(base_url()."index.php/customer_jadwal");
	}


}
