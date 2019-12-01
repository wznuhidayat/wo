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
                	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); ?>
                        <form action="" method="post">
                            <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                                <label for="fullname">Nama</label>
                                <input type="text" class="form-control" value="<?=set_value('fullname') ?>" id="fullname" placeholder="name" name="fullname">
                                <?= form_error('fullname') ?>
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