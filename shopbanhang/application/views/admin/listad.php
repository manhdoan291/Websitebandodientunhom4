<div class="col-sm-8">
	<div class="menu-heading">Danh sách tài khoản</div>
	<div class="button">
		<a href="<?php echo base_url("index.php/admin/userad/insert") ?>"">Thêm mới</a>
	</div>
	<div class="card">
		<table border="1">
			<?php foreach($user_list as $user): ?>
				<tr class="menu-heading">
					<td>tên tài khoản</td>
					<td>chỉnh sửa</td>
					<td>xóa</td>
				</tr>
				<tr style="text-align: center;">
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$user["id"]) ?>">
							<?php echo $user['username']; ?>
						</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$user["id"]) ?>">sửa</a>
					</td>
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/delete/".$user["id"]) ?>">xóa</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>