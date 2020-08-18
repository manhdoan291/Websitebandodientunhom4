
<div class="card">
	<div class="nav flex-column">
		<?php foreach($prod_list as $prod): ?>
			<div class="col-2">
			<img src="<?php echo $prod['image_link']; ?>">
		        <div>
		        	<p style="color: #004e7f;"><?php echo $prod['name']; ?></p>
		        	<span><b><?php echo $prod['price']; ?></b></span> <br>
		        	
		        </div>
		    </div>
		<?php endforeach ?>
	</div>
</div>