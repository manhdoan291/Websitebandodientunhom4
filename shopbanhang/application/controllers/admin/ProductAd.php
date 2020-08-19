<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/Admin.php";
	class ProductAd extends Admin{
		public function __construct(){
			 parent:: __construct();
			 $this->load->model('Product_model');
		}
		public function index($p =1){
			$prod_list = $this->Product_model->getALL(5,5*($p-1));

			$data = array(
			"content"=>"product/index",
			"prod_list" =>$prod_list,
			"total" => $this->Product_model->countAll()
		);
			$this->load->view("admin/layoutad",$data);
		}

		public function insert()
		{
			//echo "add user";
			$data = array(
			"content"=>"product/insert_prod.php");
			$this->load->view("admin/layoutad",$data);
		}
		public function add(){
			// echo "save";
			// echo "<pre>";
			$prod["name"] = (isset($_POST["name"]))?$_POST["name"]: "";
			// $prod["parent_id"] = (isset($_POST["parent_id"]))?$_POST["parent_id"]: "";
			$prod["price"] = (isset($_POST["price"]))?$_POST["price"]: "";
			$prod["discount"] = (isset($_POST["discount"]))?$_POST["discount"]: "";
			if($prod["name"]!=""){
				if($this->product_model->add($prod))
				//echo "thành công";
				redirect("admin/productad/index","refresh");
			else
				redirect("admin/productad/insert","refresh");
			return;
		}
		redirect("admin/product/insert","refresh");
		// echo "không thành công";
		return;
		}
		public function update($id){
			$prod["id"] = $id;
			$prod["name"] = (isset($_POST["name"]))?$_POST["name"]:"";//kiểm tra giá trị biểu thức nếu tồn tại thì gán biến thứ nhât không thì rỗng
			$prod["parent_id"] = (isset($_POST["parent_id"]))?$_POST["parent_id"]:"";
			$prod["sort_oder"] = (isset($_POST["sort_oder"]))?$_POST["sort_oder"]: "";
			if($id!="" && $prod["name"]!=""){
				if($this->product_model->update($prod));
					redirect ("admin/product/index");
				// else
				 	// redirect("newsad/edit/".$news["id"]);
				}
		}
		public function edit($id =""){
			if($id!=""){
				$prod = $this->product_model->getById($id);
				$data = array(
				"user"=>$prod,
				"content" =>"user/insert_user");
				$this->load->view("admin/layoutad",$data);
			}
		}
		public function delete($id){
			if($id!=""){
				$this->product_model->delete($id);
			}
			redirect ("admin/userad/index");
		}
	}


?>