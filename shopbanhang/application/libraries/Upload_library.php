<?php
class Upload_library{
	var $CI = '';
	function __construct()
	{
		$this->CI = & get_instance();
	}
	// $upload_path là đường dẫn lưu file
	// $file_name là tên thẻ input upload file
	function upload($upload_path = '', $file_name = '')
	{
		$config = $this->config($upload_path);
		$this->CI->load->library('upload', $config);
		if($this->CI->upload->do_upload('$file_name'))
		{
			$data = $this->CI->upload->data();
		}else{
			// không thành công
			$data = $this->CI->upload->display_errors();
		}return $data;
	}
	// up load nhiều file
	function upload_file($upload_path = '', $file_name= '')
	{
		$config = $this->config($upload_path);
		// lưu biến môi trường khi thực hiện upload
		$file = $_FILES['image_list'];
		$count = count($file['name']);
		// lưu tên ảnh các file up tc
		$image_list = array(); 
		for($i = 0; $i <= $count-1; $i++)
		{
			// khai báo tên file thứ i
			$_FILES['userfile']['name'] = $file['name'][$i];  
			// khai báo kiểu file thứ i
			$_FILES['userfile']['type'] = $file['type'][$i];
			// khai báo đường dẫn file thứ i
			$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];
			// khai báo lỗi file thứ i
			$_FILES['userfile']['error'] = $file['error'][$i];
			// khai báo kích thước file thứ i
			$_FILES['userfile']['size'] = $file['size'][$i];
			$this->CI->load->library('upload', $config);
			if($this->CI->upload->do_upload())
			{
				$data = $this->CI->upload->data();
				$image_list[] = $data['name'];
			}
		}
		return $image_list;
	}

	function config($upload_path = '')
	{
		// khai báo biến cấu hình
		$config = array();	
		// thư mục chứa file
	    $config['upload_path'] = $upload_path;
	    // định dạng được phép tải
	    $config['allowed_types'] = 'gif|jpg|png';
	    // dung lượng tối đa
	    $config['max_size'] = '3200';
	    $config['max_width']  = '3024';
	    $config['max_height']  = '3068';

	    return $config;
	}
}