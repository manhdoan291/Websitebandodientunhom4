<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once __DIR__."/admin/Admin.php";
	class ProductAd extends Admin{
		public function __construct(){
			parent:: __construct();
			if(!$this->session->userdata("news_mana")){
				redirect("admin/admin/index");
			}
		}
	}