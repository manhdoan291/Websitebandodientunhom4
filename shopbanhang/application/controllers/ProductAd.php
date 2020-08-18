<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/admin/Admin.php";
	class ProductAd extends Admin{
		public function __construct(){
			parent:: __construct();
			if(!$this->session->userdata("sp_mana")){
				redirect("admin/admin/index");
			}
		}
		public function insert(){
			// $this->load->view("news/admin/insert_form.php");
			$this->load->model("newsmodel");
			$data = array(
				"news_list" => $this->newsmodel->getAll(),
			"content"=>"news/admin/list"
		);
		$this->load->view("layoutad",$data);
		return;
		}
		public function add(){
			// echo "newsad/add";
			// echo "<pre>";
			// var_dump($_POST);
			$news["tieude"] = (isset($_POST["tieude"]))?$_POST["tieude"]:"";//kiểm tra giá trị biểu thức nếu tồn tại thì gán biến thứ nhât không thì rỗng
			$news["noidung"] = (isset($_POST["noidung"]))?$_POST["noidung"]:"";
			if($_POST["tieude"]!= ""){
				$this->load->model("newsmodel");
				if($this->newsmodel->add($news))

					// echo "thành công";
					redirect("newsad/index");//nhấn nút thêm thì quay trở lại danh sách luôn
				else echo "không tc";

				return;
			}
			echo "chua co du lieu";
			return;
		}
		public function index(){
			$this->load->model("newsmodel");
			$data = array(
				"news_list"=>$this->newsmodel->getAll(),
				"content"=>"news/admin/list");
			$this->load->view("layoutad",$data);
			return;
		}
		public function update($id){
			$news["id"] = $id;
			$news["tieude"] = (isset($_POST["tieude"]))?$_POST["tieude"]:"";//kiểm tra giá trị biểu thức nếu tồn tại thì gán biến thứ nhât không thì rỗng
			$news["noidung"] = (isset($_POST["noidung"]))?$_POST["noidung"]:"";
			if($id!="" && $news["tieude"]!=""){
				$this->load->model("newsmodel");
				if($this->newsmodel->update($news));
					redirect ("newsad/index");
				// else
				 	// redirect("newsad/edit/".$news["id"]);
				}
		}
		public function edit($id =""){
			if($id!=""){
				$this->load->model("newsmodel");
				$news = $this->newsmodel->getById($id);
				$data = array(
				"news"=>$news,
				"content" =>"news/admin/insert_form");
				$this->load->view("layoutad",$data);
			}

		}
		public function delete($id){
			if($id!=""){
				$this->load->model("newsmodel");
				$this->newsmodel->delete($id);
			}
			redirect ("newsad/index");
		// 	$this->load->model("newsmodel");
		// 	$this->newsmodel->delete($id);
		// 	$data = array(
		// 	"content"=>"news/admin/list"
		// );
		// $this->load->view("layoutad",$data);
		// return;
		}
	}