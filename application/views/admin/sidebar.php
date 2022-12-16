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


<ul class="sidebar-menu" data-widget="tree">
  <?php 
  $this->db->order_by('menu.position','asc');
  $menu = $this->db->get('menu')->result();
  foreach ($menu as $m) : ?>
    <?php if ($m->url): ?>
      <li class="<?php if($this->uri->segment(2) == $m->url) echo 'active' ?>">
        <a href="<?= site_url('admin/') . $m->url ?>">
        <i class="<?= $m->fa_icon_code ?>"></i> <span><?= ucwords($m->menu_label) ?></span>
        </a>
      </li>
    <?php else: ?>
      <?php 
      $sub_menu = $this->db->get_where('sub_menu',array('sub_menu.menu_id'=>$m->menu_id));
      if ($sub_menu->num_rows()): ?>
        <li class="treeview">
          <a href="#">
            <i class="<?= $m->fa_icon_code ?>"></i> <span><?= ucwords($m->menu_label) ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php foreach ($sub_menu->result() as $sm): ?>
              <li><a href="<?= site_url('admin/') . $sm->url_sub_menu ?>"><i class="fa fa-circle-o"></i> <?= ucwords($sm->sub_menu_name) ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      <?php endif ?>
    <?php endif ?>
  <?php endforeach ?>

  <li>

    <a href="<?=site_url('logout')?>">

      <i class="fa fa-sign-out"></i> <span> Keluar</span>

    </a>

  </li>

</ul>