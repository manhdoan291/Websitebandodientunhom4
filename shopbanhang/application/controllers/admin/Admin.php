<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends MY_controller{
		public function __construct(){
			 parent:: __construct();
			 $this->load->model('admin_model');
			if(!$this->session->userdata("is_login")){
				redirect("admin/login/index");
				return;
			}
			if(!$this->session->userdata("is_admin")){
				redirect("home/index");
			}
		}
		public function index(){
			$data = array(
				"content" => "admin/home");
				// "username" => $this->session->userdata("username"));
			$this->load->view("admin/layoutad",$data);
		}
	}