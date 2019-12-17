<section class="content-header">
	<h1>Tenda
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Tenda Data</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Tenda</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('products/tenda'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); ?>
                        <form action="<?php base_url('products/tenda/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?=set_value('name') ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            <div class="form-group <?= form_error('vendor') ? 'is-invalid':'' ?>">
                                <label for="vendor">Vendor</label>
                                <input type="number" class="form-control" value="<?=set_value('vendor') ?>" id="vendor" placeholder="vendor" name="vendor">
                                <div class="invalid-feedback">
                                    <?= form_error('vendor') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('price') ? 'is-invalid':'' ?>">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" value="<?=set_value('price') ?>" id="price" placeholder="price" name="price">
                                <div class="invalid-feedback">
                                    <?= form_error('price') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('discount') ? 'is-invalid':'' ?>">
                                <label for="discount">Discount</label>
                                <input type="text" class="form-control" value="<?=set_value('discount') ?>" id="discount" placeholder="discount" name="discount">
                                <div class="invalid-feedback">
                                    <?= form_error('discount') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('detail') ? 'is-invalid':'' ?>">
                                <label for="detail">Detail</label>
                                <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"><?=set_value('detail') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('detail') ?>
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