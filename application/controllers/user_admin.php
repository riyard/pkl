<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
	{
		$datauser = $this->db->get("user")->result();
		$data = array(
			'form' => 'user_admin',
			'user' => $datauser

		);
		//var_dump($datauser);
		$this->load->view('user_admin',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'tambahuser_admin'
			
		);
		$this->load->view('tambahuser_admin',$data);
	}

		public function insert()
	{
		$id_user = $this->input->post("id_user");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$level = $this->input->post("level");
		echo $id_user;
		echo $email;
		echo $password;
		echo $level;
		$data = array(
		"id_user"=>$id_user,
		"email"=>$email,
		"password"=>$password,
		"level"=>$level,);
		$this->db->insert("user",$data);
		redirect(base_url()."index.php/user_admin");

	}

		public function edit()
	{
		$id=$this->uri->segment(3);
		$datauser=$this->db->get_where("user",array("id_user"=>$id))->row();
		$data = array(
			'form' => 'edituser_admin',
			'user' => $datauser
		);
		$this->load->view('edituser_admin',$data);
	}

	public function update()
	{
		$id = $this->input->post("id_user");
		$id_user = $this->input->post("id_user");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$level = $this->input->post("level");
		echo $id_user;
		echo $email;
		echo $password;
		echo $level;
		$data = array(
		"id_user"=>$id_user,
		"email"=>$email,
		"password"=>$password,
		"level"=>$level,);
		$this->db->where("id_user",$id)->update("user",$data);
		redirect(base_url()."index.php/user_admin");
	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("id_user",$id)->delete('user');
		redirect(base_url()."index.php/user_admin");
	}
}