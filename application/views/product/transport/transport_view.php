<section class="content-header">
    <h1>Products
        <small>Transportasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active">Transportasi Data</li>
    </ol>
</section>
<section class="content">

    <?php $this->load->view('messages') ?>
     <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Transportasi</h3>
                <div class="pull-right">
                    <a href="<?php echo site_url('products/transport/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add transport</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Kode Transport</th>
                            <th>Name</th>
                            <th>Vendor</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Detail</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($transport as $u => $data): ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url('upload/products/').$data->img ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $data->kode_transport ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->vendor_name ?></td>
                            <td><?php echo $data->price ?></td>
                            <td><?php echo $data->category ?></td>
                            <td><?php echo $data->detail ?></td>
                            <td class="text-center">                    
                                    <a ><?php echo anchor('products/transport/edit/'.$data->kode_transport, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    <a href="<?= site_url('products/transport/delete/'.$data->kode_transport) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>  
        </div>
</section>
