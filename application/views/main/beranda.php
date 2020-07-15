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

        <div id="carouselExampleIndicators" class="carousel slide my-4 " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url('upload/carousel.png') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('upload/carousel.png') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('upload/carousel.png') ?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <div class="row">
          <?php foreach ($products as $p => $data){ ?>
            
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img class="default-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    <img class="hover-img" src="<?= base_url("upload/products/").$data->img ?>" alt="#">
                    
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a class="quickview" data-toggle="modal" data-target="#exampleModal" title="Quick View"  data-produkid="<?php echo $data->kode;?>" data-produknama="<?php echo $data->name;?>" data-produkharga="<?php echo $data->price;?>"data-produkdesc="<?php echo $data->detail;?>" data-produkimg="<?php echo $data->img;?>" ><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Schedule"><i class=" ti-calendar "></i><span>Check Schedule</span></a>
                      <?php if($this->funct->user_login() != NULL){ ?>
                      <a title="wishlist" class="add_wishlist" data-produkid="<?php echo $data->kode;?>"><i class="ti-shopping-cart" ></i><span>Add to wishlist</span></a>
                    <?php } ?>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="#">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="<?= base_url('main/product/').$data->kode ?>"><?= $data->name ?></a></h3>
                  <div class="product-price">
                    <!-- <span class="old"><</span> -->
                    
                    <span>Rp. <?= number_format($data->price,0,',','.') ?></span>
                  </div>
                  
                </div>
              </div>
          </div>
        <?php } ?>
        
        </div>
        <!-- /.row -->

      </div>
    </div>
  </div>
</section>
