<!DOCTYPE html>
<html>
<head>
	<title>đăng nhập</title>
	<?php $this->load->view('site/head'); ?>
	<link href="<?php echo public_url()?>/site/css/css.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<?php $this->load->view('site/header'); ?>
	</div>
	<div class="slide">
		<?php $this->load->view('site/slide'); ?>
	</div>
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ĐĂNG NHẬP</div>
                    <div class="card-body">
                        <form action="<?php echo base_url("index.php/admin/login/loginn");?>" method="post">
						<fieldset>
							<label>
								<table>
									<tr style="">
										<td>Tên Đăng Nhập:</td>
										<td><input type="text" name="username"></td>
									</tr>
									<tr class="tr">
										<td>Mật Khẩu:</td>
										<td><input type="Password" name="password"></td>
									</tr>
									<tr>
										<td colspan="2"><input type="submit" value="Đăng nhập"></td>
									</tr>
								</table>
							</label>
						</fieldset>
					</form>
                </div>
            </div>
        </div>
    	</div> -->
    	<section id="forms" style=" margin-bottom: 185px;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="<?php echo base_url("index.php/admin/login/loginn");?>" method="POST">
							<fieldset>
							<input type="text" name="username"/>
							<input type="Password" name="password">
							<button type="submit" class="btn btn-default">đăng nhập</button>
							</fieldset>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							<fieldset>
							<input type="text" name="customer_name" placeholder="Họ và tên"/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email"/>
							<input type="password" name="customer_password" placeholder="Mật khẩu"/>
							<input type="text" name="customer_phone" placeholder="Phone"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
							</fieldset>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php $this->load->view('site/footer'); ?>
<?php $this->load->view('site/js'); ?>

</body>
</html>