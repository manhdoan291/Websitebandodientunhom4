<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>trang quản lý website</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">     
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo public_url()?>/site/css/home.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/site/css/admin.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"> <!-- dính trên đỉnh -->
	<div class="container-fluid"> <!-- chiếm toàn bộ chiều ngang -->
		<div class="left-panel">
			<p> xin chào <?php echo $this->session->Userdata("username"); ?></p>
		</div>
		<div class="right-panel">
			<a class="navbar-branch" href="#">Trang chủ</a>
			<a class="navbar-branch" href="<?php echo base_url("index.php/admin/login/logout") ?>">Đăng xuất</a>
		</div>
	</div>
</nav>
<!-- jumbotron -->
<div class="container">
	<div class="row padding">
		<div class="col-sm-4">
			<div class="menu-heading">CHỨC NĂNG HỆ THỐNG</div>
			<div class="card">
				<ul class="nav flex-column">
					<li class="nav-item">
				    	<a class="nav-link active" href="#">Quản lý sản phẩm</a>
				  	</li>
				 	<li class="nav-item">
					    <a class="nav-link" href="<?php echo base_url("index.php/admin/catalog/index")?>">Quản lý danh mục sản phẩm</a>
					</li>
				    <li class="nav-item">
				    	<a class="nav-link" href="<?php echo base_url("index.php/admin/userad/index")?>">quản lý thành viên</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link disabled" href="#">quản lý đơn hàng</a>
				    </li>
				</ul>
			</div>
		</div>
		<div class="col-sm-8"><?php $this->load->view($content);?> </div>
	</div>		
</div>
</body>
</html>	
