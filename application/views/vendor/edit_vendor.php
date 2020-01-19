<section class="content-header">
	<h1>Products 
		<small>Vendor</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Edit Vendor</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Vendor</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('Vendor'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?php base_url('vendor/edit') ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $vendor->id_vendor?>" />
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?= $vendor->name ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            <div class="form-group <?= form_error('email') ? 'is-invalid':'' ?>">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="<?= $vendor->email ?>" id="email" placeholder="email" name="email">
                                <div class="invalid-feedback">
                                    <?= form_error('email') ?>       
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
                            <div class="form-group <?= form_error('phone') ? 'is-invalid':'' ?>">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" value="<?= $vendor->phone ?>" id="phone" placeholder="phone" name="phone">
                                <div class="invalid-feedback">
                                    <?= form_error('phone') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('image') ? 'is-invalid':'' ?>">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <input type="hidden" name="old_image" value="<?= $vendor->img ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('image') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('address') ? 'is-invalid':'' ?>">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="15" rows="5" class="form-control"><?= $vendor->address ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('address') ?>
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