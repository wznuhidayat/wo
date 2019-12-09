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
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data User</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add Vendor</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>IMG</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Option</th>
                            
                        </tr>
                    </thead>
                    <?php 
                    foreach($user->result() as $u => $data): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data->img ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php echo $data->gender ?></td>
                            <td><?php echo $data->address ?></td>
                            <td>
                                
                                <!-- <a onclick="javascript: return confirm('are you sure to delete this data?')"> <?//php echo anchor('user/del/'.$data->email, '<div class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></div>') ?> -->
                                <!-- </a> -->
                                <form action="<?= site_url('user/del') ?>" method="post" >
                                    <a ><?php echo anchor('user/edit/'.$data->email, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    <input type="hidden" name="email" value="<?= $data->email ?>" >
                                    <button onclick="javascript: return confirm('are you sure to delete this data?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                 </table>
            </div>	
        </div>
</section>