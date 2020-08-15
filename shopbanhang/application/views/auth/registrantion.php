<!DOCTYPE html>
<html>
<head>
	<title>trang đăng ký</title>
	<?php $this->load->view('site/head'); ?>
</head>
<body>
	<div class="header">
		<?php $this->load->view('site/header'); ?>
	</div>
	<div class="container-fluid backgroud-img ">
        <div class="container container-login">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card mt-5">
                        <h5 class="card-header text-center text-uppercase font-weight-bold text-light bg-primary">Form đăng ký tài khoản</h5>
                        <div class="card-body bg-light">
                            <form class="user form-inline" method="post">
                                <div class="form-group mb-2">
                                    <label type="text">Họ và tên:</label>
                                    <input type="text" id="inputtext" placeholder="Nhập họ và tên" class="form-control-sm ml-2">
                                </div>
                                <div class="form-group mb-2">
                                    <label type="text">Email:</label>
                                    <input type="text" id="inputtext" placeholder="Nhập địa chỉ email" class="form-control-sm ml-2">
                                </div>
                                <div class="form-inline mb-2">
                                    <label type="text">Password:</label>
                                    <input type="text" id="inputtext" placeholder="Nhập Password" class="form-control-sm ml-2">
                                </div>
                                <div class="form-group mb-2">
                                    <label type="text">Số điện Thoại:</label>
                                    <input type="text" id="inputtext" placeholder="Nhập số điện thoại" class="form-control-sm ml-2">
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
		<?php $this->load->view('site/footer'); ?>
	</div>
</body>
</html>