<!-- Sidebar user panel -->

<div class="user-panel">

  <div class="pull-left image">

    <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="img-circle" alt="User Image">

  </div>

  <div class="pull-left info">

    <p><?=substr($this->session->admin->username, 0, 17);?></p>

    <a href="#">

      <i class="fa fa-circle text-success"></i> Aktif

    </a>

  </div>

</div>

<!-- /.search form -->

<!-- sidebar menu: : style can be found in sidebar.less -->

<ul class="sidebar-menu" data-widget="tree">

  <li>

    <a href="<?=site_url('admin/dashboard')?>">

      <i class="fa fa-home"></i> <span>Dashboard</span>

    </a>

  </li>

  <li class="treeview">

    <a href="#">

      <i class="fa fa-table"></i> <span>Data Master</span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu">

      <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Pengguna</a></li>

    </ul>

  </li>

  <li>

    <a href="<?=site_url('logout')?>">

      <i class="fa fa-sign-out"></i> <span> Keluar</span>

    </a>

  </li>

</ul>