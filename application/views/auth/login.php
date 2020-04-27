
<section id="form-card">
	<div class="container">
		<div class="row shadow-lg">
			<div class="col-md-6">
				<img src="<?php echo base_url('assets/img/login.jpg'); ?>" alt="" class="img-thumbnail" height="600">
			</div>
			<div class="col-md-6 ">

			<form class="text-center" method="post" action="<?php echo site_url('auth/process') ?>">

			    <h4 class="mb-5 mt-4 text-center">Sign In</h4>

			    <!-- Email -->
			    <input type="email" id="Email" name="email" class="form-control mb-4 " placeholder="E-mail">

			    <!-- Password -->
			    <input type="password" id="Password" name="password" class="form-control mb-4" placeholder="Password">

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
			    <button class="btn btn-danger btn-block my-4" name="login" type="submit">Sign in</button>

			    <!-- Register -->
			    <p>Not a member?
			        <a href="<?= base_url().'auth/registration';?>">Register</a>
			    </p>
			    <!-- Social login -->
			    

				</form>
			</div>
		</div>
	</div>
</section>