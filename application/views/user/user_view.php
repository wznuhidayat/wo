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
    <?php $this->view('messages'); ?>
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data User</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus">Add Vendor</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($user as $u => $data): ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url('upload/user/').$data->img ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php echo $data->gender ?></td>
                            <td><?php echo $data->address ?></td>
                            <td class="text-center">
                                <a ><?php echo anchor('user/edit/'.$data->email, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                <a href="<?= site_url('user/delete/'.$data->email) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>	
        </div>
</section>