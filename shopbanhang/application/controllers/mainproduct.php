<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mainproduct extends CI_controller{
	public function index(){
		// $this ->load->helper('url');
		$data = array(
			"content" => "site/left",
			"list" => "site/right",
			"prod_lists" => $this->product_model->getAll(),
			"cata_list" => $this->catalog_model->getAll(),
			"total"=>$this->product_model->countAll()
		);
		$data['temp'] = 'mainproduct/index';
		$this->load->view("mainproduct/layout",$data);
		return;
	}
}