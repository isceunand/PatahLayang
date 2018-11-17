<?php
class Panitia extends CI_Controller{
	public function view($page = "dashboard"){
		$_data["title"] = ucfirst($page)." | Panitia Donor Darah";
		$_data["page"] = $page;
		$this->load->view("panitia/tmp/header", $_data);
		$this->load->view("panitia/$page");
		$this->load->view("panitia/tmp/footer");
	}
}