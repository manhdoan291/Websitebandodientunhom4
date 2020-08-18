
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{
	public function index(){
		$this->load->view("auth/login");
	}
	public function loginn(){
		echo "Login/login";
		$usr = (isset($_POST["username"]))?$_POST["username"]:"";
		$pas = (isset($_POST["password"]))?$_POST["password"]:"";
		//ECHO $pas;
		if($usr!="" && $pas!=""){
			$this->load->model("admin_model");
			$user = $this->admin_model->getByUsername($usr);
			ECHO $user["password"];//xem lay ra dung pass trong csdl k
			ECHO "<BR>";
			ECHO $pas;//xem pas co trung voi pass k
			//EXIT(9);
			if($pas == $user["password"]){
				$this->session->set_Userdata("is_login", true);
				$this->session->set_Userdata("username", $usr);
				$this->session->set_Userdata("is_admin", $user["is_admin"]);
				if($user["is_admin"]){
					redirect ("admin/admin/index");
					
				}redirect("product/index");
			}
		}
		redirect("admin/login/index");
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("admin/login/index");
	}
}