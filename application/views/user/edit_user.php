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
                <h3 class="box-title">Edit User</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('user'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?php base_url('vendor/edit') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                                <label for="fullname">Nama</label>
                                <input type="hidden" name="email" value="<?= $user->email ?>">
                                <input type="text" class="form-control" value="<?= $user->name ?>" id="fullname" placeholder="name" name="name">
                                <?= form_error('fullname') ?>
                            </div>
                            
                            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                                <label for="password">password</label>
                                <input type="password" class="form-control" value="<?=$this->input->post('password') ?>" id="password" placeholder="password" name="password">
                                <?= form_error('password') ?>
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                                <label for="passconf">password confirm</label>
                                <input type="password" class="form-control" value="<?=$this->input->post('passconf') ?>"id="passconf" placeholder="password confirm" name="passconf">
                                <?= form_error('passconf') ?>
                            </div>
                            <div class="form-group <?= form_error('phone') ? 'has-error' : null ?>">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" value="<?=  $user->phone ?>" id="phone" placeholder="phone" name="phone">
                                <?= form_error('phone') ?>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">- select -</option>
                                    <option value="L" <?= $user->gender == 'L' ? 'selected' : ''  ?>>Male</option>
                                    <option value="P" <?= $user->gender == 'P' ? 'selected' : ''  ?>>Female</option>
                                </select>
                            </div>
                            <div class="form-group <?= form_error('image') ? 'is-invalid':'' ?>">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <input type="hidden" name="old_image" value="<?= $user->img ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('image') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('address') ? 'has-error' : null ?>">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="15" rows="5" class="form-control"><?= $user->address ?></textarea>
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