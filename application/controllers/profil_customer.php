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