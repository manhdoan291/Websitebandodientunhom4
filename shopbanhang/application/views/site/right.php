<h2 class="title text-center">Sản phẩm mới nhất</h2>

                        <?php foreach($prod_lists as $prod): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                <a href="<?php echo base_url("index.php/home");?>">
                                                <img src="<?php echo $prod['image_link']; ?>" alt="" />
                                                <h2><?php echo $prod['price']; ?></h2>
                                                <p><?php echo $prod['name']; ?></p>

                                             
                                                </a>
                                                <!-- <div class="col-2">
                                                <img src="<?php echo $prod['image_link']; ?>">
                                                    <div>
                                                        <p style="color: #004e7f;"><?php echo $prod['name']; ?></p>
                                                        <span><b><?php echo $prod['price']; ?></b></span> <br>

                                                        
                                                    </div>
                                                </div> -->
                                                <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>
                                        </div>
                                </div>                           
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    
                    <div class="col-sm-8 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <?php for($p = 1; $p <= ceil($total/5); $p++): ?>
                                <li><a href=" <?php echo base_url("index.php/site/right/".$p)?>"><?php echo $p ?></a></li>
                               <?php endfor ?>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                    </div>
                      
<!-- <div class="card">
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
</div> -->