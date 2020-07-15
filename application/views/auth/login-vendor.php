
<section id="form-card">
	<div class="container">
		<div class="row shadow-lg">
			
			<div class="col-md-6 ">

			<form class="text-center" method="post" action="<?php echo site_url('auth/processV') ?>">

			    <h4 class="mb-5 mt-4 text-center">Sign In As Vendor</h4>

			    <!-- Email -->
			    <div class="form-group">
			   		 <input type="email" id="Email" name="email" class="form-control " placeholder="E-mail">
				</div>
			    <!-- Password -->
			    <div class="form-group">
			   		 <input type="password" id="Password" name="password" class="form-control" placeholder="Password">
				</div>
				<?php if($this->session->has_userdata('login-failed')){ ?>
					<div class="alert alert-danger alert-dismissible">
					        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        <span style="font-size: 12px;"><i class="icon fa fa-trash"></i> <?= $this->session->flashdata('login-failed'); ?></span>   
					</div>
				<?php } ?>
			    <div class="d-flex justify-content-around">
			        <div>
			            <!-- Remember me -->
			            <div class="custom-control custom-checkbox">
			                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
			                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
			            </div>
			        </div>
			        <div>
			            <!-- Forgot password -->
			            <a href="">Forgot password?</a>
			        </div>
			    </div>
			
			    <!-- Sign in button -->
			    <button class="btn btn-danger btn-block my-4" name="loginVendor" type="submit">Sign in</button>

			    <!-- Register -->
			    <p>Not a member?
			        <a href="<?= base_url().'auth/vendorregistration';?>">Register</a>
			    </p>
			    <p>login 
			        <a href="<?= base_url().'auth/login';?>">As User.</a>
			    </p>
			    <!-- Social login -->
			    

				</form>
			</div>
			<div class="col-md-6">
				<img src="<?php echo base_url('assets/img/content.jpg'); ?>" alt="" class="img-thumbnail" height="600">
			</div>
			
		</div>
	</div>
</section>