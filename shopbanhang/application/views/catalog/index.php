<div class="col-sm-8">
	<div class="menu-heading">Danh mục sản phẩm</div>
	<div class="button">
		<a href="<?php echo base_url("index.php/admin/catalog/insert") ?>">Thêm mới</a>
	</div>
	<div class="card">
		<table border="1">
			<?php foreach($cata_list as $cata): ?>
				<!-- <tr class="menu-heading">
					<td>tên danh mục</td>
					<td>thứ tự hiển thị</td>
					<td>chỉnh sửa</td>
					<td>xóa</td>
				</tr> -->
				<tr style="text-align: center;">
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$cata["id"]) ?>">
							<?php echo $cata['name']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$cata["id"]) ?>">
							<?php echo $cata['sort_oder']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/catalog/edit/".$cata["id"]) ?>">sửa</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/catalog/delete/".$cata["id"]) ?>">xóa</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>