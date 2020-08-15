<?php
class MY_Controller extends CI_Controller{
	function __construct(){
		// kết thừa thừ CI_Controller
		parent::__construct();
		$controller = $this->uri->segment(1);
		switch ($controller) {
			case '':
			{
				// xủ lý dữ liệu trong trang admin
				break;
			}
			default:
				// xử lý dữ liệu ngoiaf admin
				break;
		}{
		}
	}
}