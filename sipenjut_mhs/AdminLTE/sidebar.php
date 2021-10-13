

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../AdminLTE/dist/img/logo_pnc.png" alt="SIPENJUT" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPENJUT PNC</span>
    </a>

    <!-- Sidebar -->

    
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../AdminLTE/dist/img/profil.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
                <?php foreach ($data as $row ) {
                  echo $row['nama_mhs'] ;
                } ?>
              </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <!--  
              <li class="nav-item">
                <a href="../tb_datamahasiswa/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tb_golonganukt/index_golonganukt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelompok UKT</p>
                </a>
              </li>
            -->

              <li class="nav-item">
                <a href="../../AdminLTE/index.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          

            <li class="nav-item">
              <a href="../tb_tambahdata/index_tambah.php" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                  <p>Peninjauan Ulang UKT</p>
                </a>
            </li>

          
            <li class="nav-item">
              <a href="../tj_sipenjut/index.php" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                  <p>Tanya Jawab SIPENJUT</p>
              </a>
            </li>
            <!--
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../tj_sipenjut/tanya/index_kirim.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanya</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawab</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
              -->
            
          
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
         
         <a href="../../logout.php" class="btn btn-outline-primary">Logout</a>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 