<section class="content-header">
	<h1>Admin 
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Edit Admin</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Admin</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('admin/list_view'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?php base_url('admin/edit') ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="username" value="<?php echo $admin->username?>" />
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?= $admin->name ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            
                            <div class="form-group <?= form_error('password') ? 'is-invalid':'' ?>">
                                <label for="password">password</label>
                                <input type="password" class="form-control"  id="password" placeholder="password" name="password">
                                <div class="invalid-feedback">
                                    <?= form_error('password') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'is-invalid':'' ?>">
                                <label for="passconf">Password Confirmation</label>
                                <input type="password" class="form-control"  id="passconf" placeholder="passconf" name="passconf">
                                <div class="invalid-feedback">
                                    <?= form_error('passconf') ?>
                                </div>             
                            </div>
                            
                            <div class="form-group <?= form_error('image') ? 'is-invalid':'' ?>">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <input type="hidden" name="old_image" value="<?= $admin->img ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('image') ?>       
                                </div>
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