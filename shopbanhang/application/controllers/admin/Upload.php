<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Upload extends MY_controller{
		public function index(){
			if($this->input->post("submit")){
				$this->load->library('upload_library');
				$upload_path = './upload/user';
				$data = $this->upload_library->upload($upload_path, 'image');
        }
			$data = array(
			"content" => "upload/index");
			$this->load->view("admin/layoutad",$data);
		}
		function upload_file(){
			if($this->input->post("submit")){
				$this->load->library('upload_library');
				$upload_path = './upload/user';
				$data = $this->upload_library->upload($upload_path, 'image_list');
			
        	}
			$data = array(
			"content" => "upload/upload_file");
			$this->load->view("admin/layoutad",$data);
		}
	}