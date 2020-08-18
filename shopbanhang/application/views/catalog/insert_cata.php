<?php if(isset($cata)): ?>
	<h1>Chỉnh sửa tài khoản</h1>
<?php else: ?>
	<h1>Thêm tài khoản mới</h1>
<?php endif; ?>
<form method = "post" action="<?php echo base_url("index.php/admin/catalog/".(isset($cata)?"update/".$cata["id"]:"add")) ?>">
	<table>
		<tr>
			<td>Tên</td>
			<td><input type="text" name="name" value="<?php echo (isset($cata)?$cata["name"]:"") ?>"></td>
		</tr><br>
		<!-- <tr>
			<td>Danh mục cha</td>
			<td>
				<input type="text" name="parent_id" value="<?php echo (isset($cata)?$cata["parent_id"]:"") ?>">
			</td>
		</tr> -->
		<tr>
			<td>Thứ tự hiển thị</td>
			<td>
				<input type="text" name="sort_oder" value="<?php echo (isset($cata)?$cata["sort_oder"]:"") ?>"></td>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Thêm">
			</td>
		</tr>
	</table>
</form>