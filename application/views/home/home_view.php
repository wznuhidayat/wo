<nav class="navbar navbar-dark navbar-expand fixed-top" data-spy="scroll" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"><b>Wisnu WO</b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="#counters">Counters</a>
            </li>
            <li class="nav-item">
              <a class="js-scroll-trigger btn btn-sm btn-dark text-Capitalize" href="<?php echo base_url('auth/login') ?>">Sign in</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
<header class="masthead">
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4 text-uppercase">Wisnu Wedding Organizer</h1>
      <p class="lead-in">Plan all your wedding here</p>
      <a class="btn btn-dark btn-lg text-uppercase" href="<?php echo base_url('main') ?>" role="button">Order now</a>
    </div>
  </div>
</header>
<section class="page-section" id="services">
  <div class="container">  
    <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="col-md-4 text-center">
          <span class="fa-stack fa-4x">
            <i class="fa fa-users fa-stack-1x fa-inverse text-danger"></i>
          </span>
          <h4 class="service-heading">Professional Vendor</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4 text-center">
          <span class="fa-stack fa-4x">
            <i class="fa fa-edit fa-stack-1x fa-inverse text-danger"></i>
          </span>
          <h4 class="service-heading">Customization</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4 text-center">
          <span class="fa-stack fa-4x">
            <i class="fa fa-comments fa-stack-1x fa-inverse text-danger"></i>
          </span>
          <h4 class="service-heading">Chatting With Vendor</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
    </div>
  </div>
</section>

<section class="page-section bg-light" id="about">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center mb-4">
          <h2 class="section-heading text-uppercase">About</h2>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?php echo base_url('assets/img/content.jpg'); ?>" alt="" class="img-thumbnail" width="250">
        </div>
        <div class="col-md-6 text-center">
          <h3 class="section-heading mt-4">Wisnu Wedding Organizer</h2>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eligendi, tenetur ducimus, temporibus dolorem nisi natus vitae culpa dignissimos repudiandae minus esse adipisci consequatur voluptatibus fugit ullam, reprehenderit deserunt eveniet?</p>
        </div>
    </div>
  </div>
</section>
<section class="page-section" id="counters">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
          <h2 class="section-heading text-uppercase">Counters</h2>
        </div>
        <div class="col-md-3 text-center">
          <h2 class="counter-count" >412</h2>
          <h3 class="counter-text">Vendor</h3>
        </div>
        <div class="col-md-3 text-center">
          <h2 class="counter-count" >1150</h2>
          <h3 class="counter-text">Produncts</h3>
        </div>
        <div class="col-md-3 text-center">
          <h2 class="counter-count" >870</h2>
          <h3 class="counter-text">Events</h3>
        </div>
        <div class="col-md-3 text-center">
          <!-- <i></i> -->
          <h2 class="counter-count" >2900</h2>
          <h3 class="counter-text">Users</h3>
        </div>
    </div>
  </div>
</section>
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