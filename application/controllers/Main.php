<?php
class Main extends CI_Controller{
	public function index(){
		echo "Hello World";
	}

	public function register(){
		$this->load->view("user/register");
	}
}