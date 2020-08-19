<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
	// tên table
	var $table = '';
	// key chính của table
	var $key = '';
	// các file chọn mặc định khi get_list
	var $select = '';
	public function getById($id){
		$qr = $this->db->query("select *from ".$this->table." where id =$id");
		$news = $qr->first_row("array");
		return $news;
	}
	public function add($news){
		
		if($this->db->insert($this->table, $news))
			return true;
		return false;
	}
	public function getAll($limit = 10, $offset = 0){
		$qr =$this ->db->select("*");
		$qr =$this->db->limit($limit,$offset);
		$qr =$this->db->order_by("id","desc");
		$qr =$this->db->get($this->table);
		if($qr->num_rows())
			return $qr->result_array();
		return array();
	}
	public function update($news){
			$qr = $this->db->where("id",$news["id"]);
			if ($qr->update($this->table, $news)){ 
				return true;
			}
			return false;
	}
	public function delete($id){
		$qr = $this->db->where("id",$id);
		return $qr->delete($this->table);
	}

	public function countAll(){
		$this->db->select("count(id) as total");
		return $this->db->get($this->table)->first_row('array')['total'];
	}
}