<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->helper('url','form','html');		
		$this->load->model('M_user');
 
	}

	public function index()
	{
		$datalogin = $this->db->get("karyawan_master")->result();
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
			 	$this->form_validation->set_rules('Email', 'Email', 'required');
                $this->form_validation->set_rules('Password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $Email = $this->input->post("Email", TRUE);
                $Password = $this->input->post('Password', TRUE);

                //checking data via model
                $checking = $this->M_user->cek_login('karyawan_master', array('Email' => $Email), array('Password' => $Password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_Karyawan'   => $apps->id_Karyawan,
                            'Nama' 		=> $apps->Nama,
                            'Email' 	=> $apps->Email,
                            'Password' 	=> $apps->Password,
                            'Alamat'    => $apps->Alamat,
                            'NoHp' 		=> $apps->NoHp,
                            'Level' 	=> $apps->Level,
                            'NIP'    	=> $apps->NIP,
                            'status' 	=> "login"
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("Level") == "sales"){
                            redirect('profil');
                        }else if($this->session->userdata("Level") == "admin"){
                            redirect('profil_admin');
                        }else{
                        	redirect('profil_pegawai');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
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
        $this->session->unset_userdata(array('id_Karyawan'));
        $this->session->unset_userdata(array('Nama'));
        $this->session->unset_userdata(array('Email'));
        $this->session->unset_userdata(array('Password'));
        $this->session->unset_userdata(array('Alamat'));
        $this->session->unset_userdata(array('NIP'));
        $this->session->unset_userdata(array('NoHp'));
        $this->session->unset_userdata(array('Level'));
        redirect('login');
    }


}