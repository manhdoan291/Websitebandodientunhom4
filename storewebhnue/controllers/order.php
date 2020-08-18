<?php 
	include '../views/header.php';
	// include 'models/slider.php';
 ?>	
 <?php 

	$login_check = Session::get('customer_login');
	if ($login_check==false) {
		header('Location:login.php'); 
	}

 ?>
<div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
				<div class="order_page">
					<a href="http://localhost:8080/storewebhnue/controllers/index.php"><h3>Mua hàng ngay</h3></a>
				</div>
					
			</div>
					
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php 
	include '../views/footer.php';
 ?>