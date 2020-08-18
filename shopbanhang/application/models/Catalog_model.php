<?php
require_once __DIR__."/MY_Model.php";

class Catalog_model extends MY_Model
{
	public function __construct(){
 	//parent::construct();
 	$this->table = "catalog";
	}
	public function getByUsername($name){
		$qr = $this->db->query("select * from ".$this->table." where name = '$name'");
		$cata = $qr->first_row("array");
		return $cata;
	}
}