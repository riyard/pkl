<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_alat extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datacustomeralat = $this->db->get("customer_alat")->result();
		$data = array(
			'form' => 'customer_alat',
			'customer_alat' => $datacustomeralat

		);
		//var_dump($datacustomeralat);
		$this->load->view('customer_alat',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahcustomeralat'
			
		);
		$this->load->view('tambahcustomeralat',$data);
	}

		public function insert()
	{
		$Jarak = $this->input->post("Jarak");
		$Ketinggian_Pipa = $this->input->post("Ketinggian_Pipa");
		$Jenis_Transmisi = $this->input->post("Jenis_Transmisi");
		$Jenis_Cpe = $this->input->post("Jenis_Cpe");
		$Status_Cpe = $this->input->post("Status_Cpe");
		$Ip_Radio = $this->input->post("Ip_Radio");
		$Port = $this->input->post("Port");
		$SSID = $this->input->post("SSID");
		$Freq = $this->input->post("Freq");
		$Username = $this->input->post("Username");
		$Password = md5($this->input->post("Password"));
		echo $Jarak;
		echo $Ketinggian_Pipa;
		echo $Jenis_Transmisi;
		echo $Jenis_Cpe;
		echo $Status_Cpe;
		echo $Ip_Radio;
		echo $Port;
		echo $SSID;
		echo $Freq;
		echo $Username;
		echo $Password;
		$data = array(
		"Jarak"=>$Jarak,
		"Ketinggian_Pipa"=>$Ketinggian_Pipa,
		"Jenis_Transmisi"=>$Jenis_Transmisi,
		"Jenis_Cpe"=>$Jenis_Cpe, 
		"Status_Cpe"=>$Status_Cpe,
		"Ip_Radio"=>$Ip_Radio, 
		"Port"=>$Port,
		"SSID"=>$SSID,
		"Freq"=>$Freq,
		"Username"=>$Username, 
		"Password"=>$Password,);
		$this->db->insert("customer_alat",$data);
		redirect(base_url()."index.php/customer_alat");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$customer_alat=$this->db->get_where("customer_alat",array("id_Customer_Alat"=>$id))->row();
		$data = array(
			'form' => 'editcustomeralat',
			'customer_alat' => $customer_alat 
		);
		$this->load->view('editcustomeralat',$data);
	}

	public function update()
	{
		$id_Customer_Alat = $this->input->post("id_Customer_Alat");
		$Jarak = $this->input->post("Jarak");
		$Ketinggian_Pipa = $this->input->post("Ketinggian_Pipa");
		$Jenis_Transmisi = $this->input->post("Jenis_Transmisi");
		$Jenis_Cpe = $this->input->post("Jenis_Cpe");
		$Status_Cpe = $this->input->post("Status_Cpe");
		$Ip_Radio = $this->input->post("Ip_Radio");
		$Port = $this->input->post("Port");
		$SSID = $this->input->post("SSID");
		$Freq = $this->input->post("Freq");
		$Username = $this->input->post("Username");
		$Password = md5($this->input->post("Password"));
		echo $Jarak;
		echo $Ketinggian_Pipa;
		echo $Jenis_Transmisi;
		echo $Jenis_Cpe;
		echo $Status_Cpe;
		echo $Ip_Radio;
		echo $Port;
		echo $SSID;
		echo $Freq;
		echo $Username;
		echo $Password;
		$data = array(
		"Jarak"=>$Jarak,
		"Ketinggian_Pipa"=>$Ketinggian_Pipa,
		"Jenis_Transmisi"=>$Jenis_Transmisi,
		"Jenis_Cpe"=>$Jenis_Cpe, 
		"Status_Cpe"=>$Status_Cpe,
		"Ip_Radio"=>$Ip_Radio, 
		"Port"=>$Port,
		"SSID"=>$SSID,
		"Freq"=>$Freq,
		"Username"=>$Username, 
		"Password"=>$Password,);
		$this->db->where("id_Customer_Alat",$id_Customer_Alat)->update("customer_alat",$data);
		redirect(base_url()."index.php/customer_alat");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_Customer_Alat",$id)->delete('customer_alat');
		redirect(base_url()."index.php/customer_alat");
	}


}
