 <div class="card col-4 shadow-sm mx-auto mt-4 mb-4">
		<form class="text-center border border-light p-4" method="post" action="<?php echo site_url('auth/process') ?>">

		    <p class="h4 mb-4">Sign in</p>

		    <!-- Email -->
		    <input type="email" id="Email" name="email" class="form-control mb-4" placeholder="E-mail">

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
		    <p>or sign in with:</p>

		    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
		    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
		    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
		    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

		</form>
	</div>