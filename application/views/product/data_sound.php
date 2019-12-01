<section class="content-header">
	<h1>Products
		<small>Sound System</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-user"></i></a></li>
		<li class="active">Sound Data</li>
	</ol>
</section>
<section class="content">
	 <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Vendor</h3>
                <div class="pull-right">
                	<a href="<?php echo site_url('products/sound/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add Vendor</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    
                    <tr>
                        <th>Sound id</th>
                        <th>Nama</th>
                        <th>Vendor</th>
                        <th>Price</th>
                        <th>Detail</th>
                        <th>img</th>
                        <th>Option</th>
                        
                    </tr>
                    <?php 
                    foreach($sound->result() as $u => $data): ?>
                    <tr>
                        <td><?php echo $data->sound_id ?></td>
                        <td><?php echo $data->name ?></td>
                        <td><?php echo $data->vendor ?></td>
                        <td><?php echo $data->price ?></td>
                        <td><?php echo $data->detail ?></td>
                        <td><?php echo $data->img ?></td>
                        <td class="text-center">
                            
                            <!-- <a onclick="javascript: return confirm('are you sure to delete this data?')"> <?//php echo anchor('user/del/'.$data->email, '<div class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></div>') ?> -->
                            <!-- </a> -->
                    
                                <a ><?php echo anchor('products/sound/edit/'.$data->sound_id, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                </a>
                                <a href="<?= site_url('products/sound/del/'.$data->sound_id) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>
                           
                        </td>
                    </tr>
                    <?php endforeach; ?>
                 </table>
            </div>	
        </div>
</section>