<section class="content-header">
    <h1>Schedule
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active">Schedule Data</li>
    </ol>
</section>
<section class="content">

        <div class="col-md">
          <div class="box box-primary">
            <div class="box-header">
                    <h3 class="box-title">Event</h3>
                <div class="pull-right">
                    <a href="<?php echo site_url('schedule/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add Schedule</i>
                    </a>
                </div>
            </div>
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
</section>
<!-- Modal -->
<div class="modal fade" id="ModalCalendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                <div class="col-md-12 col-md-offset">
                    <?php echo form_open_multipart('schedule/add');?>
                        <div class="form-group <?= form_error('name') ? 'is-invalid':'' ?>">
                                <label for="name">Name</label>
                                <input type="text" class="form-control"  id="name" placeholder="Name event" name="name">
                                <div class="invalid-feedback">
                                    <?= form_error('name') ?>
                                </div>        
                            </div>
                        <div class="form-group">
                          <label>Select Disabled</label>
                          <select class="form-control" disabled="" id="email">
                            <option ></option>
                            
                          </select>
                        </div>
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
                                <input type="text" class="form-control" id="start" data-date-format="mm/dd/yyyy" name="start">
                                <div class="input-group-addon">to</div>
                                <input type="text" class="form-control" id="end" data-date-format="mm/dd/yyyy" name="end">
                            </div>
                        </div>
                        <div class="form-group <?= form_error('Detail') ? 'is-invalid':'' ?>">
                                <label for="Detail">Detail</label>
                                <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"><?=set_value('Detail') ?></textarea>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>