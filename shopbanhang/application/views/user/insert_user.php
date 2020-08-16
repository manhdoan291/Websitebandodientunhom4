<?php if(isset($user)): ?>
	<h1>Chỉnh sửa tài khoản</h1>
<?php else: ?>
	<h1>Thêm tài khoản mới</h1>
<?php endif; ?>
<form method = "post" action="<?php echo base_url("index.php/admin/userad/".(isset($user)?"update/".$user["id"]:"add")) ?>">
	<table>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" value="<?php echo (isset($user)?$user["username"]:"") ?>"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>
				<input type="password" name="password" id="" cols="30" rows="10" value="<?php echo (isset($user)?$user["password"]:"") ?>">
			</td>
		</tr>
		<tr>
			<td>Quyền Admin</td>
			<td>
				<input type="checkbox" name="is_admin"
				<?php echo ((isset($user) && $user["is_admin"])?"checked = 'checked'":"") ?>
				>
			</td>
		</tr>
		<tr>
			<td>Quyền quản lý sản phẩm</td>
			<td>
				<input type="checkbox" name="sp_mana"
				<?php echo ((isset($user) && $user["sp_mana"])?"checked = 'checked'":"") ?>
				>
			</td>
		</tr>
		<tr>
			<td>Quyền quản lý người dùng</td>
			<td>
				<input type="checkbox" name="user_mana"
				<?php echo ((isset($user) && $user["user_mana"])?"checked = 'checked'":"") ?>
				>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Thêm">
			</td>
		</tr>
	</table>
</form>