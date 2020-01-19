<section class="content-header">
	<h1>Products
		<small>Wedding Dress</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Wedding Dress Data</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Dress</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('Products/dress'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo form_open_multipart('products/dress/add');?>
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?=set_value('name') ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            <div class="form-group <?= form_error('price') ? 'is-invalid':'' ?>">
                                <label for="price">price</label>
                                <input type="text" class="form-control" value="<?=set_value('price') ?>" id="price" placeholder="price" name="price">
                                <div class="invalid-feedback">
                                    <?= form_error('price') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('type') ? 'is-invalid':'' ?>">
                                <label for="type">type</label>
                                <input type="text" class="form-control" value="<?=set_value('type') ?>" id="type" placeholder="type" name="type">
                                <div class="invalid-feedback">
                                    <?= form_error('type') ?>
                                </div>        
                            </div>
                            <div class="form-group ">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file"  id="image" placeholder="image" name="image">        
                            </div>
                            <div class="form-group <?= form_error('detail') ? 'is-invalid':'' ?>">
                                <label for="detail">detail</label>
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