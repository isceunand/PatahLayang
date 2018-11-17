<?php
class User extends CI_Controller{
	public function index(){
		echo "HelloWorld!";
	}

	public function view($page = "dashboard"){
		$_data["title"] = ucfirst($page)." | User Donor Darah";
		$_data["page"] = $page;
		$this->load->view("user/tmp/header", $_data);
		$this->load->view("user/$page");
		$this->load->view("user/tmp/footer");
	}
}