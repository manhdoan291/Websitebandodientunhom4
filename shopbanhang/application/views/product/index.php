<div class="col-sm-8">
	<div class="menu-heading">Danh sách sản phẩm</div>
	<div class="button">
		<a href="<?php echo base_url("index.php/admin/productad/insert") ?>">Thêm mới</a>
	</div>
	<div class="card">
		<table border="1">
			<?php foreach($prod_list as $prod): ?>
				<!-- <tr class="menu-heading">
					<td>tên danh mục</td>
					<td>thứ tự hiển thị</td>
					<td>chỉnh sửa</td>
					<td>xóa</td>
				</tr> -->
				<tr style="text-align: center;">
					<td>
						<a href="<?php echo base_url("index.php/admin/productad/edit/".$prod["id"]) ?>">
							<?php echo $prod['name']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/productad/edit/".$prod["id"]) ?>">
							<?php echo $prod['price']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/productad/edit/".$prod["id"]) ?>">sửa</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/productad/delete/".$prod["id"]) ?>">xóa</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>