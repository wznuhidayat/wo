
<?php if($this->session->has_userdata('success')){ ?>
<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> <?= $this->session->flashdata('success'); ?></h4>   
</div>
<?php } ?>
<?php if($this->session->has_userdata('deleted')){ ?>
<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-trash"></i> <?= $this->session->flashdata('deleted'); ?></h4>   
</div>
<?php } ?>