<!DOCTYPE html>
<html>
<head>
	<title>Website Thương Mại Điện Tử</title>
	<?php $this->load->view('site/head'); ?>
</head>
<body>
	<div class="header">
		<?php $this->load->view('site/header'); ?>
	</div>
	<div class="slide">
		<?php $this->load->view('site/slide'); ?>
	</div>
	<div class="container">
		<div class="row padding">
			<div class="col-sm-4">
				<?php $this->load->view($content);?>
			</div>
			<div class="col-sm-8">
				<?php $this->load->view('site/right'); ?>
			</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php $this->load->view('site/footer'); ?>
			</div>
	</div>
</body>
</html>