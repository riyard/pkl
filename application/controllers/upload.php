<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	
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
		$this->load->view('profil_customertambah');
	}

	function proses()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500;
		$config['max_width']            = 2048;
		$config['max_height']           = 1000;
		$config['encrypt_name'] 		= true;
		$this->load->library('upload',$config);
		$keterangan_berkas = $this->input->post('keterangan_berkas');
		$id_Customer = $this->input->post('id_Customer');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for($i = 0; $i < $jumlah_berkas;$i++)
		{
            if(!empty($_FILES['berkas']['name'][$i])){
 
				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
	   
				if($this->upload->do_upload('file')){
					
					$uploadData = $this->upload->data();
					$data['Nama_JenisFile'] = $uploadData['file_name'];
					$data['keterangan'] = $keterangan_berkas[$i];
					$data['tipe'] = $uploadData['file_ext'];
					$data['ukuran'] = $uploadData['file_size'];
					$data['id_Customer'] = $id_Customer[$i];
					$this->db->insert('customer_file',$data);
				}
			}
		}
 
		redirect('profil_customer');
	}
}