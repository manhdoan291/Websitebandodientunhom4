<!DOCTYPE html>
<html>
<head>
	<title>đăng nhập</title>
	<?php $this->load->view('site/head'); ?>
	<link href="<?php echo public_url()?>/site/css/css.css" rel="stylesheet">
</head>
<body>
	<?php $this->load->view('site/header'); ?>
	<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
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
    </div>
    </div>
</main>
<?php $this->load->view('site/footer'); ?>
</body>
</html>