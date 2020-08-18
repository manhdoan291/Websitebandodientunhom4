<div>
	<h6>DANH MỤC SẢN PHẨM</h6>
</div>
<div class="card">
	<ul class="nav flex-column">
		<?php foreach($cata_list as $cata): ?>
		<li class="nav-item">
			<a class="nav-link active" href="#"><?php echo $cata['name']; ?></a>
			<?php if(!empty($cata->subs)):?>
			<ul>
				<?php foreach($cata->subs as $subs): ?>
				<li class="nav-item">
					<a class="nav-link" href="#"><?php echo $subs['name']; ?></a>
				</li>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
		</li>
		<?php endforeach ?>
	</ul>
</div>

			
		