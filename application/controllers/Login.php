<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}

	public function index()
	{
		$datalogin = $this->db->get("user")->result();
		$data = array(
			'form' => 'login',
			'login' => $datalogin

		);
		//var_dump($datalogin);
		$this->load->view('login',$data);
	}

	public function cek_login()
	{
		if(isset($_POST['login'])){
			$email = $this->input->post('email',true);
			$password = $this->input->post('password',true);
			$this->load->model("M_user");
			$cek = $this->M_user->cek_login($email,$password);
			$hasil = count($cek);
			if($hasil > 0){
				$datalogin = $this->db->get_where('user',array("email" => $email, "password" => $password))->row();
				if($datalogin->level == "sales"){
					redirect("profil");
				}elseif ($datalogin->level == "admin"){
					redirect("profil_admin");
				}elseif ($datalogin->level == "pegawai"){
					redirect("profil_pegawai");
				}elseif ($datalogin->level == "customer"){
					redirect("profil_customer");
				}
			}else{
				redirect("login");
			}

		}
	}

	public function sales()
	{
		$this->load->view("profil");
	}

	public function admin()
	{
		$this->load->view("profil_admin");
	}

	public function pegawai()
	{
		$this->load->view("profil_pegawai");
	}

	public function customer()
	{
		$this->load->view("profil_customer");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
}