<?php
require_once __DIR__."/MY_Model.php";

class Product_model extends MY_Model
{
	public function __construct(){
 	//parent::construct();
 	$this->table = "product";
	}
	public function getByUsername($name){
		$qr = $this->db->query("select * from ".$this->table." where name = '$name'");
		$prod = $qr->first_row("array");
		return $prod;
	}
}