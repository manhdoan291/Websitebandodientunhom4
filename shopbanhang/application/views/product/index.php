<!-- <?php if(isset($prod)): ?>
	<h1>Chỉnh sửa sản phẩm</h1>
<?php else: ?>
	<h1>Thêm sản phẩm mới</h1>
<?php endif; ?>
<form method = "post" action="<?php echo base_url("index.php/admin/productad/".(isset($prod)?"update/".$prod["id"]:"add")) ?>">
	<table>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="name" value="<?php echo (isset($prod)?$prod["name"]:"") ?>"></td>
		</tr><br>
		<tr>
			<td>Giá</td>
			<td>
				<input type="text" name="price" value="<?php echo (isset($prod)?$prod["price"]:"") ?>"></td>
			</td>
		</tr>
		<tr>
			<td>Giảm Giá</td>
			<td>
				<input type="text" name="discount" value="<?php echo (isset($prod)?$prod["discount"]:"") ?>"></td>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Thêm">
			</td>
		</tr>
	</table>
</form> -->

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Sản Phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">              
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <!-- <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div> -->
      </div>
    </div>
    <div class="table-responsive">
                     
      <table class="table table-striped b-t b-light" >
        <thead >
          <tr style="text-align: center;">
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Discount</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	
        	<?php foreach($prod_list as $prod): ?>
				<tr>
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$prod["id"]) ?>">
							<?php echo $prod['name']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/catalog/edit/".$prod["id"]) ?>">
							<?php echo $prod['price']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/catalog/delete/".$prod["id"]) ?>">
							<?php echo $prod['discount']; ?>%
						</a>
					</td>
				</tr>
			<?php endforeach ?>

          
        </tbody>
      </table>
      
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 5 of <?php echo $total ?> items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <?php for($p = 1; $p <= ceil($total/5); $p++): ?>
				    <li><a href=" <?php echo base_url("index.php/admin/productad/index/".$p)?>"><?php echo $p ?></a></li>
			       <?php endfor ?>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>