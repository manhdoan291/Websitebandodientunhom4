<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/admin/Admin.php";
	class Product extends Admin{
		public function __construct(){
			 parent:: __construct();
			 $this->load->model('Product_model');
		}
		public function index($p =1){
			$prod_lists = $this->MY_Model->getALL(5,5*($p-1));

			$data = array(
			"content"=>"site/right",
			"prod_lists"=>$prod_lists,
			"total" => $this->MY_Model->countAll()
			);
			$this->load->view("home/index",$data);
			return;

		}


			

			
}