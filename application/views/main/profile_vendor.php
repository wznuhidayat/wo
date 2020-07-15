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
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text"><a href=""><i class="fa fa-map-marker"> </i> <?= $data->address ?></a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                
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
			<h3 class="mt-4 text-center">Product</h3>
      <?php if ($tenda != NULL) { ?>
      <h4 class="mt-4 text-left border-bottom">Tenda</h4>
      <?php } ?>
			<div class="row">
          <?php foreach ($tenda as $p => $data){ ?>
            
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_tenda;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                      <?php if($this->funct->user_login() != NULL){ ?>
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_tenda;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                    <?php } ?>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="<?= base_url('main/product/').$data->kode_tenda ?>"><?= $data->name ?></a></h3>
                  <div class="product-price">
                    <!-- <span class="old"><</span> -->
                    
                    <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                  </div>
                  
                </div>
              </div>
          </div>
        <?php } ?>
        
          
		</div>
      
      <?php if ($sound != NULL) { ?>
      <h4 class="mt-4 text-left border-bottom">sound</h4>
      <?php } ?>
      <div class="row">
          <?php foreach ($sound as $p => $data){ ?>
            
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_sound;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                      <?php if($this->funct->user_login() != NULL){ ?>
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_sound;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                    <?php } ?>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="<?= base_url('main/product/').$data->kode_sound ?>"><?= $data->name ?></a></h3>
                  <div class="product-price">
                    <!-- <span class="old"><</span> -->
                    
                    <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                  </div>
                  
                </div>
              </div>
          </div>
        <?php } ?>
        </div>
        <?php if ($dress != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">dress</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($dress as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_dress;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_dress;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_dress ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($transport != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">transport</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($transport as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_transport;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_transport;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_transport ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($photograp != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">photograp</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($photograp as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_photograp;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_photograp;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_photograp ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>  
        <?php if ($makeup != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">makeup</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($makeup as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_makeup;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_makeup;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_makeup ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($kuade != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">kuade</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($kuade as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_kuade;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_kuade;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_kuade ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($catering != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">catering</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($catering as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_catering;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_catering;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_catering ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($gedung != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">gedung</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($gedung as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_gedung;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_gedung;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_gedung ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($kursi != NULL) { ?>
        <h4 class="mt-4 text-left border-bottom">kursi</h4>
        <?php } ?>
        <div class="row">
            <?php foreach ($kursi as $p => $data){ ?>
              
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                      
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_kursi;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                        <?php if($this->funct->user_login() != NULL){ ?>
                        <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_kursi;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                      <?php } ?>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="<?= base_url('main/product/').$data->kode_kursi ?>"><?= $data->name ?></a></h3>
                    <div class="product-price">
                      <!-- <span class="old"><</span> -->
                      
                      <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                    </div>
                    
                  </div>
                </div>
            </div>
          <?php } ?>
        </div>
    <a class="btn-floating btn-lg btn-danger"><i class="fa fa-plus"></i></a>
	</div>

</section>