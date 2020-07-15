	
	<section id="form-card">
		<div class="container">
			<div class="row shadow-lg">
				<div class="col-md-6 p-5">
	    	<!-- Default form register -->
	    		<h4 class="mb-4 mt-4 text-center">Sign Up as Vendor</h4>

				<?php echo form_open_multipart('auth/vendorregistration');?>
				    <div class="form-group form-row ">
				        <div class="col">
				            <!-- First name -->
				            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="nameFirst" required="">
				        </div>
				        <div class="col">
				            <!-- Last name -->
				            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="nameSecond" required="">
				        </div>
				    </div>

				    <!-- E-mail -->
				    <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
				    	<input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="E-mail" name="email">
				    	<?= form_error('email') ?>
					</div>
				    <!-- Password -->
				    <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
				    	<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
				    	<?= form_error('password') ?>
					</div>
					<div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
						<input type="password"  class="form-control" placeholder="Password confirm" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="passconf">
						<?= form_error('email') ?>
					</div>
				    <!-- Phone number -->
				   <!--  <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock"> -->
				    

				    <!-- Sign up button -->
				    <button class="btn btn-danger my-4 btn-block" type="submit">Sign Up</button>

				    <!-- Social register -->
				    <p>or sign up with:</p>

				    <a href="#" class="mx-2" role="button"><i class="fa fa-facebook-f light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-twitter light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-linkedin light-blue-text fa-2x"></i></a>
				    <a href="#" class="mx-2" role="button"><i class="fa fa-github light-blue-text fa-2x"></i></a>

				    <hr>

				    <!-- Terms of service -->
				    <p>already a member ?
				        <a href="<?php echo base_url('auth/loginvendor') ?>" target="_blank">Sign in</a>

				</form>
			<!-- Default form register -->
			    </div>	
				<div class="col-md-6">
					<img src="<?php echo base_url('assets/img/regis.jpg'); ?>" alt="" class="img-thumbnail" height="660">
				</div>
				
			</div>
		</div>
	</section>