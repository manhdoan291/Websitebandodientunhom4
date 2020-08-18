<?php
class MY_Controller extends CI_Controller{
	function __construct(){
		// kết thừa thừ CI_Controller
		parent::__construct();
		$controller = $this->uri->segment(1);
		switch ($controller) {
			case 'admin':
			{
				// xủ lý dữ liệu trong trang admin
				$this->load->helper('admin');
				break;
			}
			default:
				// xử lý dữ liệu ngoiaf admin
				$this->load->model('catalog_model');
				$input = array();
				$input['where'] = array('parent_id'=>0);
				$cata_list = $this->catalog_model->getAll($input);
				foreach ($cata_list as $cata) {
					$input['where'] = array('parent_id', $cata->id);
					$subs = $this->catalog_model->getAll($input);
					$cata->subs = $subs;
					# code...
				}
				$this->data['cata_list'] = $cata_list;
				break;
		}{
		}
	}
}