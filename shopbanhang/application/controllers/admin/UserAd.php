<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/Admin.php";
	class UserAd extends Admin{
		public function index(){
			$this->load->model("admin_model");
			$data = array(
			"user_list" => $this->admin_model->getAll(),
			"content"=>"admin/listad");
		return $this->load->view("admin/layoutad",$data);
		}

		public function insert()
		{
			//echo "add user";
			$data = array(
			"content"=>"user/insert_user.php");
			$this->load->view("admin/layoutad",$data);
		}
		public function add(){
			// echo "save";
			// echo "<pre>";
			$user["username"] = (isset($_POST["username"]))?$_POST["username"]: "";
		$user["password"] = (isset($_POST["password"]))?$_POST["password"]: "";
		$user["is_admin"] = (isset($_POST["is_admin"])? 1:0);
		$user["sp_mana"] = (isset($_POST["sp_mana"])? 1:0);
		$user["user_mana"] = (isset($_POST["user_mana"])? 1:0);
		if($user["username"]!=""){
			$this->load->model("admin_model");
			if($this->admin_model->add($user))
				//echo "thành công";
				redirect("admin/userad/index","refresh");
			else
				redirect("admin/userad/insert","refresh");
			return;
		}
		redirect("admin/userad/insert","refresh");
		return;
		}
		public function update($id){
			$user["id"] = $id;
			$user["username"] = (isset($_POST["username"]))?$_POST["username"]:"";//kiểm tra giá trị biểu thức nếu tồn tại thì gán biến thứ nhât không thì rỗng
			$user["password"] = (isset($_POST["password"]))?$_POST["password"]:"";
			if($id!="" && $user["username"]!=""){
				$this->load->model("admin_model");
				if($this->admin_model->update($user));
					redirect ("admin/userad/index");
				// else
				 	// redirect("newsad/edit/".$news["id"]);
				}
		}
		public function edit($id =""){
			if($id!=""){
				$this->load->model("admin_model");
				$user = $this->admin_model->getById($id);
				$data = array(
				"user"=>$user,
				"content" =>"user/insert_user");
				$this->load->view("admin/layoutad",$data);
			}
		}
		public function delete($id){
			if($id!=""){
				$this->load->model("admin_model");
				$this->admin_model->delete($id);
			}
			redirect ("admin/userad/index");
		}
	}


?>