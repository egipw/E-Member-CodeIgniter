<li><a class="app-menu__item" href="<?php echo base_url(); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Data Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
  <ul class="treeview-menu">
    <li><a class="treeview-item" href="<?php echo base_url('admin/user_adm'); ?>"><i class="app-menu__icon fa fa-user"></i> User Admin</a></li>
    <li><a class="treeview-item" href="<?php echo base_url('admin/user_member'); ?>"><i class="app-menu__icon fa fa-user"></i> User Member</a></li>
  </ul>
</li>

<li><a class="app-menu__item" href="<?php echo base_url('admin/member_baru'); ?>"><i class="app-menu__icon fa fa-address-book-o
"></i><span class="app-menu__label">Member Baru</span></a></li>

<li><a class="app-menu__item" href="<?php echo base_url('admin/member'); ?>"><i class="app-menu__icon fa fa-address-card-o"></i><span class="app-menu__label">Member Aktif</span></a></li>

<li><a class="app-menu__item" href="<?php echo base_url('profil/admin'); ?>"><i class="app-menu__icon fa fa-user-circle-o"></i><span class="app-menu__label">Profil</span></a></li>

<li><a class="app-menu__item" href="<?php echo base_url('logout'); ?>"><i class="app-menu__icon fa fa-power-off"></i><span class="app-menu__label">Log-out</span></a></li>