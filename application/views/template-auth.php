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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/themify-icons/themify-icons.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl-carousel/owl-carousel.css" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" crossorigin="anonymous">

    

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(2)) ?></title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">Wisnu WO</a>
        <div class="navbar-menu">
          <ul class="nav navbar-nav">
            <!-- <form class="form-inline my-auto mr-sm-2">
              <input class="form-control mr-sm-2 my-sm-0" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form> -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" >
                <i class="fa fa-cart-plus fa-2x"></i>
                <span class="badge badge-light">10</span>
              </a>
            </li>
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= base_url('upload/admin/default.png') ?>" class="user-image" alt="User Image" >
                  <span class="hidden-xs">User</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="#" class="img-circle" alt="User Image" width="90px">
                    <?php //echo var_dump($this->funct->admin_login()); ?>
                    <p>
                       Admin
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
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
    <!-- Footer -->
    <!-- <script type="text/JavaScript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script> -->
    <script type="text/JavaScript" src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"  crossorigin="anonymous"></script> 
    <!-- <script type="text/JavaScript" src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"  crossorigin="anonymous"></script>  -->
    
  













    <script src="<?= base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/JavaScript" src="<?= base_url() ?>assets/js/main.js"  crossorigin="anonymous"></script>
   
    <script type="text/JavaScript" src="<?= base_url() ?>assets/vendor/owl-carousel/owl-carousel.js"  crossorigin="anonymous"></script>
    
  </body>
</html>