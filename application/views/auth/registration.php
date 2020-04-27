	
	<section id="form-card">
		<div class="container">
			<div class="row shadow-lg">
				<div class="col-md-6">
					<img src="<?php echo base_url('assets/img/regis.jpg'); ?>" alt="" class="img-thumbnail" height="660">
				</div>
				<div class="col-md-6 p-5">
	    	<!-- Default form register -->
	    		<h4 class="mb-4 mt-4 text-center">Sign Up</h4>

				<?php echo form_open_multipart('auth/registration');?>
				    <div class="form-row mb-4">
				        <div class="col">
				            <!-- First name -->
				            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="nameFirst">
				        </div>
				        <div class="col">
				            <!-- Last name -->
				            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="nameSecond">
				        </div>
				    </div>

				    <!-- E-mail -->
				    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

				    <!-- Password -->
				    <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">

					<input type="password"  class="form-control mb-4" placeholder="Password confirm" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="passconf">
				    <!-- Phone number -->
				   <!--  <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock"> -->
				    

				    <!-- Sign up button -->
				    <button class="btn btn-danger my-4 btn-block" type="submit">Sign in</button>

				    <!-- Social register -->
				    <p>or sign up with:</p>

				    <a href="#" class="mx-2" role="button"><i class="fa fa-facebook-f light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-twitter light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-linkedin light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-github light-blue-text fa-2x"></i></a>

				    <hr>

				    <!-- Terms of service -->
				    <p>already a member ?
				        <a href="<?php echo base_url('auth/login') ?>" target="_blank">Sign in</a>

				</form>
			<!-- Default form register -->
			    </div>
			</div>
		</div>
	</section>