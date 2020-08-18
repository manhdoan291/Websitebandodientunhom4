<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top"> <!-- dính trên đỉnh -->
	<div class="container-fluid"> <!-- chiếm toàn bộ chiều ngang -->
		<a class="navbar-branch" href="#"> <!-- chứa ảnh, logo -->
			<img src="<?php echo public_url()?>site/images/banner1.jpg" height="50">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive"> <!-- nối với button qua id -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="#">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tin tức</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Giỏ hàng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Liên hệ</a>
				</li>
			</ul>
		</div>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-primary btn-lg" type="submit">search</button>
	    </form>
	</div>
</nav>