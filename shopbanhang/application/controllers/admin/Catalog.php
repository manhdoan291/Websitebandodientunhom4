<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/Admin.php";
	class Catalog extends Admin{
		public function __construct(){
			 parent:: __construct();
			 $this->load->model('catalog_model');
		}
		public function index(){
			$data = array(
			"cata_list" => $this->catalog_model->getAll(),
			"content"=>"catalog/index");
		return $this->load->view("admin/layoutad",$data);
		}
		public function insert()
		{
			//echo "add user";
			$data = array(
			"content"=>"catalog/insert_cata.php");
			$this->load->view("admin/layoutad",$data);
		}
		public function add(){
			// echo "save";
			// echo "<pre>";
			$cata["name"] = (isset($_POST["name"]))?$_POST["name"]: "";
			// $cata["parent_id"] = (isset($_POST["parent_id"]))?$_POST["parent_id"]: "";
			$cata["sort_oder"] = (isset($_POST["sort_oder"]))?$_POST["sort_oder"]: "";
			if($cata["name"]!=""){
				$this->load->model("catalog_model");
				if($this->catalog_model->add($cata))
				//echo "thành công";
				redirect("admin/catalog/index","refresh");
			else
				redirect("admin/catalog/insert","refresh");
			return;
		}
		// redirect("admin/catalog/insert","refresh");
		echo "không thành công";
		return;
		}
		public function update($id){
			$cata["id"] = $id;
			$cata["name"] = (isset($_POST["name"]))?$_POST["name"]:"";//kiểm tra giá trị biểu thức nếu tồn tại thì gán biến thứ nhât không thì rỗng
			$cata["parent_id"] = (isset($_POST["parent_id"]))?$_POST["parent_id"]:"";
			$cata["sort_oder"] = (isset($_POST["sort_oder"]))?$_POST["sort_oder"]: "";
			if($id!="" && $cata["name"]!=""){
				$this->load->model("catalog_model");
				if($this->catalog_model->update($cata));
					redirect ("admin/catalog/index");
				// else
				 	// redirect("newsad/edit/".$news["id"]);
				}
		}
		public function edit($id =""){
			if($id!=""){
				$this->load->model("catalog_model");
				$cata = $this->catalog_model->getById($id);
				$data = array(
				"user"=>$cata,
				"content" =>"user/insert_user");
				$this->load->view("admin/layoutad",$data);
			}
		}
		public function delete($id){
			if($id!=""){
				$this->load->model("catalog_model");
				$this->catalog_model->delete($id);
			}
			redirect ("admin/userad/index");
		}
	}