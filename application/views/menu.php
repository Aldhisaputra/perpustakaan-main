<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <li class="active">
        <a href="<?= base_url('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li><a href="<?= base_url('anggota') ?>"><i class="fa fa-users"></i> Data Anggota</a></li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-desktop"></i>
          <span>Master Buku</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">3</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url('pengarang'); ?>"><i class="fa fa-circle-o"></i> Pengarang</a></li>
          <li><a href="<?= base_url('penerbit'); ?>"><i class="fa fa-circle-o"></i> Penerbit</a></li>
          <li><a href="<?= base_url('buku'); ?>"><i class="fa fa-circle-o"></i> Buku</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-area-chart"></i>
          <span>Transaksi</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">2</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url('peminjaman'); ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
          <li><a href="<?= base_url('pengembalian'); ?>"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
        </ul>
      </li>

      <hr>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
