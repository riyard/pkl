<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil_customer extends CI_Controller {
	public function index()
	{
		$datacustomer = $this->db->get("customer")->result();
		$data = array(
			'form' => 'profil_customer',
			'customer' => $datacustomer

		);
		var_dump($datacustomer);
		$this->load->view('profil_customer',$data);
	}
	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('profil_customertambah', $error);
		}else{
			/*$file = $this->upload->data();
          //mengambil data di form
          	$data = ['gambar' => $file['file_name'],
           'NIK' => set_value('NIK')];
          $this->M_tambah->input($data); //memasukan data ke database
          redirect('profil_customer'); //mengalihkan halaman*/

        $NIK = $this->input->post("NIK");
		$Nama_JenisFile = $this->input->post("Nama_JenisFile");
		echo $NIK;
		echo $Nama_JenisFile;
		$data = array(
		"NIK"=>$NIK,
		"Nama_JenisFile"=>$Nama_JenisFile,);
		$this->db->insert("customer",$data);
		redirect(base_url()."index.php/profil_customer");
		}
	}        
	public function input()
	{
		$data = array(
			'form' => 'profil_customertambah'
			
		);
		$this->load->view('profil_customertambah',$data);
	}
	public function edit()
	{
		$id=$this->uri->segment(3);
		$datacustomer=$this->db->get_where("customer",array("id_Customer"=>$id))->row();
		$data = array(
			'form' => 'profil_customertambah',
			'customer' => $datacustomer
		);
		$this->load->view('profil_customertambah',$data);
	}
	public function update()
	{
		$id_Customer = $this->input->post("id_Customer");
		$id_Karyawan = $this->input->post("id_Karyawan");
		$nama = $this->input->post("nama");
		$Email = $this->input->post("Email");
		$NoHp = $this->input->post("NoHp");
		$Password = $this->input->post("Password");
		$NIK = $this->input->post("NIK");
		$Nama_JenisFile = $this->input->post("Nama_JenisFile");
		$Alamat = $this->input->post("Alamat");
		$Jenis_Pelanggan = $this->input->post("Jenis_Pelanggan");
		$Status = $this->input->post("Status");
		
		echo $id_Customer;
		echo $id_Karyawan;
		echo $nama;
		echo $Email;
		echo $NoHp;
		echo $Password;
		echo $NIK;
		echo $Nama_JenisFile;
		echo $Alamat;
		echo $Jenis_Pelanggan;
		echo $Status;
		$data = array(
		"id_Customer"=>$id_Customer,
		"id_Karyawan"=>$id_Karyawan,
		"nama"=>$nama,
		"Email"=>$Email,
		"NoHp"=>$NoHp,
		"Password"=>$Password,
		"NIK"=>$NIK,
		"Nama_JenisFile"=>$Nama_JenisFile,
		"Alamat"=>$Alamat,
		"Jenis_Pelanggan"=>$Jenis_Pelanggan,
		"Status"=>$Status,);
		$this->db->where("id_Customer",$id_Customer)->update("customer",$data);
		redirect(base_url()."index.php/profil_customer");
	}
	/*public function insert()
	{
		$NIK = $this->input->post("NIK");
		$Nama_JenisFile = $this->input->post("Nama_JenisFile");
		echo $NIK;
		echo $Nama_JenisFile;
		$data = array(
		"NIK"=>$NIK,
		"Nama_JenisFile"=>$Nama_JenisFile,);
		$this->db->insert("customer",$data);
		redirect(base_url()."index.php/profil_customer");

	}*/
	
}