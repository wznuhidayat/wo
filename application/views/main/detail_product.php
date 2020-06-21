<section id="product">
	<div class="container">
   
		<div class="row">
    <?php foreach ($product as $p => $data){ ?>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-3">
			                <!-- Product Slider -->
                  <div class="product-gallery">
                    <div class="quickview-slider-active">
                      <div class="single-slider">
                        <img src="<?php echo base_url("upload/products/").$data->img ?>" alt="#">
                      </div>
                      <div class="single-slider">
                        <img src="https://via.placeholder.com/569x528" alt="#">
                      </div>
                      <div class="single-slider">
                        <img src="https://via.placeholder.com/569x528" alt="#">
                      </div>
                      <div class="single-slider">
                        <img src="https://via.placeholder.com/569x528" alt="#">
                      </div>
                    </div>
                  </div>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
                                <div class="quickview-content">
                                    <h3><?= $data->vendor_name ?></h3>
                                    <h2><?= $data->name ?></h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>Rp. <?= number_format($data->price,0,',','.') ?></h3>
                                    <div class="quickview-peragraph">
                                        <p><?= $data->detail ?></p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn checkout">Checkout</i></a>
										
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php } ?>
            </div>
	</div>
</section>