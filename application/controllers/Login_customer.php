<?php 
 
class Login_customer extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->helper('url','form','html');		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$datalogin = $this->db->get("customer")->result();
		$data = array(
			'form' => 'login',
			'login' => $datalogin

		);
		//var_dump($datalogin);
		$this->load->view('login_customer',$data);
	}
 
	function aksi_login(){
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
       
        if($this->form_validation->run() == TRUE)
        {
            $Email		= $this->input->post('Email');
            $Password   = $this->input->post('Password');

            $this->load->model('M_login');
            $validasi_login = $this->M_login->cek_login($Email, $Password);

            if($validasi_login->num_rows() > 0)
            {
                $data = $validasi_login->row();

                $session = array(
                    'id_Customer' => $data->id_Customer,
					'id_Karyawan' => $data->id_Karyawan,
					'nama'=>$data->nama,
					'NoHp'=>$data->NoHp,
					'NIK'=>$data->NIK,
					'Alamat'=>$data->Alamat,
					'Jenis_Pelanggan'=>$data->Jenis_Pelanggan,
					'Status'=>$data->Status,
					'Email'=>$data->Email,
                    'Password' => $data->Password,
					'status' => "login"
                );
                $this->session->set_userdata($session); 

                    /*echo "<script>alert('Selamat Datang $data->nama Anda berhasil login');</script>";*/
                    redirect('profil_customer','refresh');
                
            }
            else
            {
                $this->session->set_flashdata('login_response', 'Login Gagal!! Email Dan Password Tidak Valid!!');
                redirect('login_customer');
            }
        }
        else
        {
            $this->index();
        }	
    }
 
	public function logout()
    {
    	$this->session->sess_destroy();
        $this->session->unset_userdata(array('id_Customer'));
        $this->session->unset_userdata(array('id_Karyawan'));
        $this->session->unset_userdata(array('nama'));
        $this->session->unset_userdata(array('Email'));
        $this->session->unset_userdata(array('Password'));
        $this->session->unset_userdata(array('Alamat'));
        $this->session->unset_userdata(array('NIK'));
        $this->session->unset_userdata(array('NoHp'));
        $this->session->unset_userdata(array('Jenis_Pelanggan'));
        $this->session->unset_userdata(array('Status'));
        redirect('login_customer');
    }
}