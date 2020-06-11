<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/reset.css" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/themify-icons/themify-icons.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl-carousel/owl-carousel.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(2)) ?></title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('main') ?>">Wisnu WO</a>
        <div class="navbar-menu">
          <ul class="nav navbar-nav">
            <!-- <form class="form-inline my-auto mr-sm-2">
              <input class="form-control mr-sm-2 my-sm-0" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form> -->
            <?php if($this->session->userdata('email') != NULL){ ?>
            <li class="dropdown notifications-menu mr-3">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-cart-plus fa-2x"></i>
                <span class="badge badge-light" id="counttotal"></span>
              </a>
              <div class="shopping-item">
                  <div class="dropdown-cart-header" id="countrow">
                    
                  </div>
                  <ul class="shopping-list" id="detail_cart">
                    <!-- <li>
                      <a href="#" class="remove" title="Remove this item"><i class="fa fa-trash"></i></a>
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                      <h4><a href="#">Woman Ring</a></h4>
                      <p class="quantity">1x - <span class="amount">$99.00</span></p>
                    </li>
                    <li>
                      <a href="#" class="remove" title="Remove this item"><i class="fa fa-trash"></i></a>
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                      <h4><a href="#">Woman Necklace</a></h4>
                      <p class="quantity">1x - <span class="amount">$35.00</span></p>
                    </li> -->
                  </ul>
                  <div class="bottom">
                    <div class="total">
                      <span>Total</span>
                      <span class="total-amount">$134.00</span>
                    </div>
                    <a href="checkout.html" class="btn animate">Checkout</a>
                  </div>
                </div>
            </li>
            
            <li class="dropdown user user-menu" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= base_url('upload/admin/').$this->funct->admin_login()->img ?>" class="user-image" alt="User Image" >
                  <span class="hidden-xs"><?= $this->funct->user_login()->name  ?></span>
                </a>
                <ul class="dropdown-menu">
                 <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                      Profile
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Schedule</a>
                    <a href="#" class="list-group-item list-group-item-action">Setting</a>
                    <a href="<?php echo site_url('auth/logoutUser') ?>" class="list-group-item list-group-item-action"><i class="pull-right fa fa-sign-out mt-1"></i>Logout</a>
                  </div>
                </ul>
              </li>
            <?php  } ?>
            
          </ul>
        </div>
      </div>

        
      
    </nav>
   	<?php echo $contents; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
              <span class="copyright">Copyright &copy; Your Website 2019</span>
            </div>
            <div class="col-md-4 mt-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-inline quicklinks">
                <li class="list-inline-item">
                  <a href="#">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Terms of Use</a>
                </li>
              </ul>
            </div>
        </div>
      </div>  
    </footer>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
                  <div class="product-gallery">
                    <div class="quickview-slider-active">
                      <div class="single-slider">
                        <img id="productimage" >
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
                <!-- End Product slider -->
                        </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2 id="nameview">asda</h2>
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
                                    </div>
                                    <h3 id="priceview">32848230</h3>
                                    <div class="quickview-peragraph">
                                        <p id="desc"></p>
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
                    <a href="#" class="btn">Add cart</a>
                    <a href="#" class="btn checkout">Checkout</a>
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
                    </div>
                </div>
            </div>
    </div>

    <!-- modal schadule -->
    <div class="modal fade" id="btnSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="calendar"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <!-- <script type="text/JavaScript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <!-- <script type="text/JavaScript" src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"  crossorigin="anonymous"></script>  -->
    
  













    <script src="<?= base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/JavaScript" src="<?= base_url() ?>assets/js/main.js"  crossorigin="anonymous"></script>
   
    <script type="text/JavaScript" src="<?= base_url() ?>assets/vendor/owl-carousel/owl-carousel.js"  crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="<?= base_url() ?>assets/vendor/jquery/jquery-3.4.1.js"  crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
      
       
        // Load shopping cart
        
 
        
        $('.button-head .add_cart').click(function(){
            var kode    = $(this).data("produkid");
            var name  = $(this).data("produknama");
            var price = $(this).data("produkharga");

            $.ajax({
                url : "<?php echo base_url();?>/main/addToCart",
                method : "POST",
                data : {kode: kode, name: name, price: price},
                success: function(data){
                    $('#countrow').load("<?php echo base_url();?>main/countrow");
                    $('#detail_cart').html(data);
                    $('#counttotal').load("<?php echo base_url();?>main/countTotal");
                    
                },
               error: function(jqxhr, status, exception) {
                   alert('Exception:', exception);
               }
            });
        });
        
        $('#detail_cart').load("<?php echo base_url();?>main/load_cart");
        $('#counttotal').load("<?php echo base_url();?>main/countTotal");
        $('#countrow').load("<?php echo base_url();?>main/countItems");

        //remove
        $(document).on('click','.remove',function(){
          var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
          $.ajax({
            url : "<?php echo base_url();?>main/removeCart",
            method : "POST",
            data : {row_id : row_id},
            success :function(data){
              $('#countrow').load("<?php echo base_url();?>main/countrow");
              $('#detail_cart').html(data);
              $('#counttotal').load("<?php echo base_url();?>main/countTotal");
              
            }
          });
        });
         $('.button-head .quickview').click(function(){
            var kode    = $(this).data("produkid");
            var name  = $(this).data("produknama");
            var price = $(this).data("produkharga");
            var detail = $(this).data("produkdesc");
            var img = $(this).data("produkimg");

            $('#nameview').text(name);
            $('#priceview').text(price);
            $('#desc').text(detail);
            $('#productimage').attr('src',"<?php echo base_url("upload/products/") ?>" + img);
        });
    });



</script>

  </body>
</html>