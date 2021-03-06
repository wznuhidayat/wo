<section class="content-header">
    <h1>Products
        <small>Tenda</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i></a></li>
        <li class="active">Tenda Data</li>
    </ol>
</section>
<section class="content">
    <?php $this->view('messages') ?>
     <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Tenda</h3>
                <div class="pull-right">
                    <a href="<?php echo site_url('products/tenda/add'); ?>" class="btn btn-success btn-flat">
                     <i class="fa fa-plus"> Add Tenda</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>img</th>
                            <th>Kode tenda</th>
                            <th>Name</th>
                            <th>Vendor</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Detail</th>
                            <th>Option</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($tenda as $u => $data): ?>
                        <tr>
                            <td>
                                <img src="<?php echo base_url('upload/products/').$data->img ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $data->kode_tenda ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->vendor_name ?></td>
                            <td><?php echo $data->price ?></td>
                            
                            <td><?php echo $data->detail ?></td>
                            <td class="text-center">                    
                                    <a ><?php echo anchor('products/tenda/edit/'.$data->kode_tenda, '<div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>') ?>
                                    </a>
                                    <a href="<?= site_url('products/tenda/delete/'.$data->kode_tenda) ?>" onclick="javascript: return confirm('are you sure to delete this data?')"  class="btn btn-xs btn-danger"  ><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                 </table>
            </div>  
        </div>
</section>
