<?php
class Main extends CI_Controller{
	public function index(){
		$this->load->view("user/login");
	}

	public function register(){
		$this->load->view("user/register");
	}

	public function login(){
		if(!@$this->session->userdata("userDD18")){
			$this->load->view("user/login");
		}else{
			$this->alert->msg("success", "Anda sudah login", "", 1, base_url("/user"));
		}
	}

	public function logout(){
		session_destroy();
		$this->alert->msg("success", "Logout Berhasil", "", 1, base_url());
	}
}