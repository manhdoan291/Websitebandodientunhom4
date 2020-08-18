<?php if(isset($prod)): ?>
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
</form>