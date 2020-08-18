<!-- <div class="col-sm-8">
	<div class="menu-heading">Danh mục sản phẩm</div>
	<div class="button">
		<a href="<?php echo base_url("index.php/admin/catalog/insert") ?>">Thêm mới</a>
	</div>
	<div class="card">
		<table border="1">
			<?php foreach($cata_list as $cata): ?>
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
 -->
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
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
            <th>Tên danh mục</th>
            <th>Sửa</th>
            <th>xóa</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	
        	<?php foreach($cata_list as $cata): ?>
				<tr>
					<td>
						<a href="<?php echo base_url("index.php/admin/userad/edit/".$cata["id"]) ?>">
							<?php echo $cata['name']; ?>
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

          
        </tbody>
      </table>
      
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <?php for($p = 1; $p <= ceil($total/5); $p++): ?>
				<li><a href=" <?php echo base_url("index.php/admin/catalog/index/".$p)?>"><?php echo $p ?></a></li>
			<?php endfor ?>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>