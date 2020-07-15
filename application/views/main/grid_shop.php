<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">

        <h1 class="my-3 text-center">Category</h1>
          <div class="list-group border" >
            <a href="<?= base_url('main/category/sound') ?>" class="list-group-item"><i class="pull-right fa fa-volume-up"></i> <span>Sound System</span></a>
            <a href="<?= base_url('main/category/tenda') ?>" class="list-group-item"><i class="pull-right fa fa-industry"></i> <span>Tenda</span></a>
            <a href="<?= base_url('main/category/dress') ?>" class="list-group-item"><i class="pull-right fa fa-female"></i> <span>Dress</span></a>
            <a href="<?= base_url('main/category/trans') ?>" class="list-group-item"><i class="pull-right fa fa-bus"></i> <span>Transportation</span></a>
            <a href="<?= base_url('main/category/photo') ?>" class="list-group-item"><i class="pull-right fa fa-camera-retro"></i> <span>Photograph</span></a>
            <a href="<?= base_url('main/category/makeup') ?>" class="list-group-item"><i class="pull-right fa fa-smile-o"></i> <span>Makeup</span></a>
            <a href="<?= base_url('main/category/kuade') ?>" class="list-group-item"><i class="pull-right fa fa-magic"></i> <span>Kuade</span></a>
            <a href="<?= base_url('main/category/gedung') ?>" class="list-group-item"><i class="pull-right fa fa-building"></i> <span>Gedung</span></a>
            <a href="<?= base_url('main/category/catering') ?>" class="list-group-item"><i class="pull-right fa fa-cutlery"></i> <span>Catering</span></a>
            <a href="<?= base_url('main/category/kursi') ?>" class="list-group-item"><i class="pull-right fa fa-archive"></i> <span>kursi</span></a>
          </div>
         
      </div>
      <div class="col-lg-9 ">
        
        <div class="row">
                 <div class="shop-top">
                  <div class="shop-shorter">
                    <div class="single-shorter">
                      <label>Show :</label>
                      <select>
                        <option selected="selected">09</option>
                        <option>15</option>
                        <option>25</option>
                        <option>30</option>
                      </select>
                    </div>
                    <div class="single-shorter">
                      <label>Sort By :</label>
                      <select>
                        <option selected="selected">Name</option>
                        <option>Price</option>
                        <option>Size</option>
                      </select>
                    </div>
                  </div>
                  <ul class="view-mode">
                    <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                    <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                  </ul>
                </div>
        
        </div>
        <div class="row">
          <?php if($tenda != NULL){ ?>
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
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_tenda;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_tenda;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
          
          <?php 
          if($dress != NULL){
          foreach ($dress as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_dress;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_dress;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($trans != NULL){
          foreach ($trans as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_transport;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_transport;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($photo != NULL){
          foreach ($photo as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_photograp;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_photograp;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($makeup != NULL){
          foreach ($makeup as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_makeup;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_makeup;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($kuade != NULL){
          foreach ($kuade as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_kuade;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_kuade;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($gedung != NULL){
          foreach ($gedung as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_gedung;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_gedung;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($catering != NULL){
          foreach ($catering as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_catering;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_catering;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
              <?php 
          if($kursi != NULL){
          foreach ($kursi as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_kursi;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_kursi;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
               <?php 
          if($sound != NULL){
          foreach ($sound as $p => $data){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
          <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview"data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode_sound;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a> 
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode_sound;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
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
              <?php } }?>
        </div>
        <!-- /.row -->

      </div>
    </div>
  </div>
</section>