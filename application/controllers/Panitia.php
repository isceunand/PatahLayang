<?php
class Panitia extends CI_Controller{
	public function view($page = "dashboard"){
		if(!@$this->session->userdata("panitiaDD18")){
			$this->alert->msg("warning", "", "Anda harus login dahulu", 1, base_url("/panitia/login"));
		}else{
			$_data["title"] = ucfirst($page)." | Panitia Donor Darah";
			$_data["page"] = $page;
			$this->load->view("panitia/tmp/header", $_data);
			$this->load->view("panitia/$page");
			$this->load->view("panitia/tmp/footer");
		}
	}

	public function login(){
		if(!@$this->session->userdata("panitiaDD18")){
			$this->load->view("panitia/login");
		}else{
			$this->alert->msg("success", "Login berhasil...", "", 1, base_url("/panitia"));
		}
	}

	public function register(){
		$this->load->view("panitia/register");
	}
}