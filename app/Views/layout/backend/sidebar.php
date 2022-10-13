<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2A0944;">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
      <img src="<?= base_url(); ?>/img/bpsputih.png" alt="BPS Kaltim" style="opacity: .8; width:230px">
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/bpsputih.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info" style="background-color: transparent;">
          <p class="d-block" style="color:white">Backend Desa Cantik <br> Provinsi Kaltim </p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url(); ?>/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/upload/excel" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Unggah Foto dan Update Portal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/upload/laporan" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Unggah Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
              <p>
                Log Out 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">