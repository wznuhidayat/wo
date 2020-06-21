<section class="head">
	<div class="container">
		<div class="col-md-12 shadow-sm border pb-4">
          <!-- Widget: user widget style 1 -->
          <?php foreach ($vendor as $p => $data){ ?>
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?= base_url() ?>/upload/vendor/photo1.png') center center;">
              <h3 class="widget-user-username text-white "><?= $data->name ?></h3>
              
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?= base_url('upload/vendor/').$data->img ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
          <?php } ?>
        </div>
        <!-- /.col -->
      </div>
	</div>
</section>
<section class="main">
	<div class="container">
		<div class="col-md-12 border shadow-sm">
			<h3 class="mt-4 text-center">product</h3>
			<div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                    <span class="new">New</span>
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                    <span class="out-of-stock">Hot</span>
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                    <span class="out-of-stock">Hot</span>
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                   
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                  <div class="product-price">
                    <span class="old">$60.00</span>
                    <span>$50.00</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
		</div>
	</div>
</section>