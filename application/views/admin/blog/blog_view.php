<section class="content-header">
    <h1>Blog
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active">Blog Data</li>
    </ol>
</section>
<section class="content">

    <?php $this->load->view('messages') ?>
     <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Blog</h3>
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add Article</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php 
                        foreach($admin as $u => $data): ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url('upload/admin/').$data->img ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $data->username ?></td>
                            <td><?php echo $data->name ?></td>
                            <td class="text-center">                    
                                    <a ><?php echo anchor('admin/edit/'.$data->username, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    <a href="<?= site_url('admin/delete/'.$data->username) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                        <?php endforeach; ?> -->
                    </tbody>
                 </table>
            </div>  
        </div>
</section>
