<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_controller{
	public function index(){
		// $this ->load->helper('url');
		$data = array(
			"content" => "site/left",
			"list" => "site/right",
			"prod_list" => $this->product_model->getAll(),
			"cata_list" => $this->catalog_model->getAll()
		);
		$data['temp'] = 'site/home/index';
		$this->load->view("site/layout",$data);
		return;
	}
}