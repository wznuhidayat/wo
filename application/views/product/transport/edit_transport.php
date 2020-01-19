<section class="content-header">
    <h1>Products
        <small>Transportasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active">Edit Data Transport</li>
    </ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Transport</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('Products/transport'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?php base_url('Products/transport/edit') ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $transport->kode_transport?>" />
                            <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?= $transport->name ?>" id="name" placeholder="name" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                            <div class="form-group <?= form_error('price') ? 'is-invalid':'' ?>">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" value="<?= $transport->price ?>" id="price" placeholder="price" name="price">
                                <div class="invalid-feedback">
                                    <?= form_error('price') ?>       
                                </div>
                            </div>
                            
                            <div class="form-group <?= form_error('category') ? 'is-invalid':'' ?>">
                                <label for="category">category</label>
                                <input type="text" class="form-control" value="<?= $transport->category ?>" id="category" placeholder="category" name="category">
                                <div class="invalid-feedback">
                                    <?= form_error('category') ?>
                                </div>             
                            </div>
                            <div class="form-group <?= form_error('image') ? 'is-invalid':'' ?>">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <input type="hidden" name="old_image" value="<?= $transport->img ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('image') ?>       
                                </div>
                            </div>
                            <div class="form-group <?= form_error('detail') ? 'is-invalid':'' ?>">
                                <label for="detail">Detail</label>
                                <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"><?= $transport->detail ?></textarea>
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