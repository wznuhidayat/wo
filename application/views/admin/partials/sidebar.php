<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?= $this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
          <a href="<?= base_url().'admin/dashboard';?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>
          <a href="<?= base_url().'user/index';?>">
            <i class="fa fa-users"></i>
            <span>User</span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'vendor' ? 'class="active"' : '' ?>>
          <a href="<?= base_url().'vendor/index'; ?>">
            <i class="fa fa-user"></i> <span>Vendor</span>
          </a>
        </li>
        <li class="treeview <?= $this->uri->segment(1) == 'products' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(2) == 'sound' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/sound';?>"><i class="fa fa-volume-up"></i>Sound system</a>
            </li>
            <li <?= $this->uri->segment(2) == 'tenda' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/tenda' ?>"><i class="glyphicon glyphicon-tent"></i>Tenda</a>
            </li>
            <li <?= $this->uri->segment(2) == 'dress' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/dress' ?>"><i class="fa fa-female"></i>Dress</a>
            </li>
            <li <?= $this->uri->segment(2) == 'transport' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/transport' ?>"><i class="fa fa-bus"></i>Transportation</a>
            </li>
            <li <?= $this->uri->segment(2) == 'photograp' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/photograp' ?>"><i class="fa fa-camera-retro"></i>Photographer</a>
            </li>
            <li <?= $this->uri->segment(2) == 'makeup' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/makeup' ?>"><i class="fa fa-smile-o"></i>Makeup</a>
            </li>
            <li <?= $this->uri->segment(2) == 'kuade' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/kuade' ?>"><i class="fa fa-magic"></i>Kuade</a>
            </li>
            <li <?= $this->uri->segment(2) == 'catering' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/catering' ?>"><i class="fa fa-cutlery"></i>Catering</a>
            </li>
            <li <?= $this->uri->segment(2) == 'gedung' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/gedung' ?>"><i class="fa fa-building"></i>Gedung</a>
            </li>
            <li <?= $this->uri->segment(2) == 'kursi' ? 'class="active"' : '' ?>>
              <a href="<?= base_url().'products/kursi' ?>"><i class="fa fa-building"></i>Kursi</a>
            </li>
          </ul>
        </li>
        <li <?= $this->uri->segment(1) == 'schedule' ? 'class="active"' : '' ?>>
          <a href="<?= base_url().'schedule'; ?>">
            <i class="fa fa-user"></i> <span>Schedule</span>
          </a>
        </li>
         <li>
          <a href="pages/widgets.html">
            <i class="fa fa-dollar"></i> <span>Payment</span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-line-chart"></i> <span>Reports</span>
          </a>
        </li>
        <li class="header">Admin</li>
        <li <?= $this->uri->segment(2) == 'list_view' ? 'class="active"' : '' ?>>
          <a href="<?= base_url().'admin/list_view';?>">
            <i class="fa fa-users"></i>
            <span>User</span>
          </a>
        </li>
     </ul>