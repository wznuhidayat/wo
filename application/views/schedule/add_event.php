<section class="content-header">
	<h1>Schedule
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Data event</li>
	</ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Event</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('Schedule'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('schedule/add');?>
                        <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="<?=set_value('name') ?>" id="name" placeholder="Name event" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <?= form_dropdown('email', $user, $selected, ['class' => 'form-control' , 'required' => 'required']) ?>  
                        </div>
                        <!-- <div class="form-group">
                            <label for="email">Email User</label>
                            <input type="email" name="email" placeholder="Email User" class="form-control">
                        </div> -->
                        <div class="form-group <?= form_error('address') ? 'is-invalid':'' ?>">
                                <label for="address">address</label>
                                <textarea name="address" id="address" cols="15" rows="5" class="form-control"><?=set_value('address') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('address') ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="">Start and End</label>
                            <div class="input-group input-daterange">
                                <input type="text" class="form-control" data-date-format="mm/dd/yyyy" name="start">
                                <div class="input-group-addon">to</div>
                                <input type="text" class="form-control" data-date-format="mm/dd/yyyy" name="end">
                            </div>
                        </div>
                        <div class="form-group <?= form_error('Detail') ? 'is-invalid':'' ?>">
                                <label for="Detail">Detail</label>
                                <textarea name="detail" id="Detail" cols="15" rows="5" class="form-control"><?=set_value('Detail') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('Detail') ?>
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
