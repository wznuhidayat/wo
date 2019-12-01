
	<section class="content-header">
      <h1>
        Vendor
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vendor</li>
      </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Vendor</h3>
                <div class="pull-right">
                     <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Add Vendor</i></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    
                    <tr>
                        <th>IMG</th>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Detail</th>
                        <th>Option</th>
                        
                    </tr>
                    <?php 
                    foreach($vendor as $ven): ?>
                    <tr>
                        <td><?php echo $ven->img ?></td>
                        <td><?php echo $ven->id_vendor ?></td>
                        <td><?php echo $ven->owner ?></td>
                        <td><?php echo $ven->email ?></td>
                        <td><?php echo $ven->phone ?></td>
                        <td><?php echo $ven->address ?></td>
                        <td><?php echo $ven->detail ?></td>
                        <td>
                            <a onclick="javascript: return confirm('are you sure to delete this data?')"><?php echo anchor('vendor/edit/'.$ven->id_vendor, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                            </a>
                            <a onclick="javascript: return confirm('are you sure to delete this data?')"><?php echo anchor('vendor/delete/'.$ven->id_vendor, '<div class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></div>') ?>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                 </table>
            </div>	
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form add data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'vendor/add_action'; ?>">
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <input type="text" class="form-control" id="owner" placeholder="owner" name="owner">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="address" name="address">
                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea name="detail" id="detail" cols="15" rows="5" class="form-control"></textarea>
                </div>               
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>