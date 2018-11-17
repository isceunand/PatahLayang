<?php
class User extends CI_Controller{
	public function index(){
		echo "HelloWorld!";
	}

	public function view($page = "dashboard", $kode=null){
		if(!@$this->session->userdata("userDD18")){
			$this->alert->msg("warning", "", "Silahkan login dahulu", 1, base_url("/login"));
		}else{
			$_data["title"] = ucfirst($page)." | User Donor Darah";
			$_data["page"] = $page;
			$_data["kode"] = $kode;
			$this->load->view("user/tmp/header", $_data);
			$this->load->view("user/$page");
			$this->load->view("user/tmp/footer");
		}
	}
}