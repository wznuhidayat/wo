<section class="content-header">
	<h1>Users
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">User Data</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add User</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('user'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); ?>
                        <form action="" method="post">
                            <div class="form-row ">
                                <div class="form-group col <?= form_error('nameFirst') ? 'has-error' : null ?>">
                                    <label for="nameFirst">First Name</label>
                                    <input type="text" class="form-control" value="<?=set_value('nameFirst') ?>" id="nameFirst" placeholder="name" name="nameFirst">
                                    <?= form_error('nameFirst') ?>
                                </div>
                                <div class="form-group col <?= form_error('lastName') ? 'has-error' : null ?>">
                                    <label for="nameSecond">Last name</label>
                                    <input type="text" class="form-control" value="<?=set_value('nameSecond') ?>" id="nameSecond" placeholder="name" name="nameSecond">
                                    <?= form_error('nameSecond') ?>
                                </div>
                            </div>
                            <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="<?=set_value('email') ?>" id="email" placeholder="email" name="email">
                                <?= form_error('email') ?>
                            </div>
                            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                                <label for="password">password</label>
                                <input type="password" class="form-control" value="<?=set_value('password') ?>" id="password" placeholder="password" name="password">
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                                <label for="passconf">password confirm</label>
                                <input type="password" class="form-control" value="<?=set_value('passconf') ?>"id="passconf" placeholder="password confirm" name="passconf">
                                <?= form_error('passconf') ?>
                            </div>
                            <div class="form-group <?= form_error('phone') ? 'has-error' : null ?>">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" value="<?=set_value('phone') ?>" id="phone" placeholder="phone" name="phone">
                                <?= form_error('phone') ?>
                            </div>
                            <div class="form-group ">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file"  id="image" placeholder="image" name="image">        
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">- select -</option>
                                    <option value="L">Male</option>
                                    <option value="P">Female</option>
                                </select>
                            </div>
                            <div class="form-group <?= form_error('address') ? 'has-error' : null ?>">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="15" rows="5" class="form-control"><?=set_value('address') ?></textarea>
                                <?= form_error('address') ?>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn  btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>	
        </div>
</section>