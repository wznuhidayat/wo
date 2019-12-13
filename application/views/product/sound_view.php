<section class="content-header">
    <h1><?= ucfirst($this->uri->segment(1)) ?>
        <small><?= ucfirst($this->uri->segment(2)) ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active"><?= ucfirst($this->uri->segment(2)) ?> Data</li>
    </ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= ucfirst($page) ?> Data Sound</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('products/sound'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?= site_url('products/sound/process') ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nama Sound</label>
                                <input type="hidden" name="id" value="<?= $sound->sound_id ?>">
                                <input type="text" class="form-control" value="<?= $sound->name ?>" id="name" placeholder="name" name="name" required  >   
                            </div>
                            <div class="form-group">
                                <label for="id_vendor">ID Vendor</label>
                                <?= form_dropdown('id_vendor', $vendor, $selected_vendor, ['class' => 'form-control' , 'required' => 'required']) ?>  
                            </div> 
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" value="<?= $sound->price ?>" id="price" placeholder="price" name="price" required  >   
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" value="<?= $sound->kategori ?>" id="kategori" placeholder="kategori" name="kategori" required  >   
                            </div>
                            <div class="form-group">
                                <label for="detail">Detail product</label>
                                <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"><?= $sound->detail ?></textarea>  
                            </div>
                            <!-- div class="form-group">
                                <label for="img">img</label>
                                <input type="text" class="form-control" value="" id="img" placeholder="img" name="id_vendor" required  >   
                            </div> -->
                            
                            <div class="form-group ">
                                <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn  btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>	
        </div>
</section>