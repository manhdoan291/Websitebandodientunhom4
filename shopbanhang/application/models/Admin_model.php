<?php
/**
 * 
 */
require_once __DIR__."/MY_Model.php";

class Admin_model extends MY_Model
{
	public function __construct(){
 	//parent::construct();
 	$this->table = "admin";
	}
	public function getByUsername($username){
		$qr = $this->db->query("select * from ".$this->table." where username = '$username'");
		$user = $qr->first_row("array");
		return $user;
	}
}