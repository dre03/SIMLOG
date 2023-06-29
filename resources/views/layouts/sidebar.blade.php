
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.html" class="brand-link">
        <img src="{{asset('lte')}}/assets/img/logo.jpeg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LOGISTIK - Backend</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('lte')}}/assets/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Aziel Admin</a>
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

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <div class="user-panel  pb-3 mb-1 d">
            </div>
            <li class="nav-item">
              <a href="dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/users" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Users
                </p>
              </a>

              <div class="user-panel  pb-1 mb-1 d">
              </div>
            <li class="nav-item">
              <a href="produsen" class="nav-link">
                <i class="nav-icon far fas fa-users"></i>
                <p>
                  Produsen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="distributor" class="nav-link">
                <i class="nav-icon fas far fa-truck-moving"></i>
                <p>
                  Distributor
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="kategori" class="nav-link">
                <i class="nav-icon fas fa-regular fa-list-ul"></i>
                <p>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="produk" class="nav-link">
                <i class="nav-icon far fas fa-tag"></i>
                <p>
                  Produk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="toko" class="nav-link">
                <i class="nav-icon fas far fa-warehouse"></i>
                <p>
                  Toko
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengiriman" class="nav-link">
                <i class="nav-icon fas far fa-shipping-fast"></i>
                <p>
                  Pengiriman
                </p>
              </a>
            </li>
            <div class="user-panel  pb-1 mb-1 d">
            </div>
            <li class="nav-item">
              <a href="#" data-toggle="modal" data-target="#modal-default" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Logout</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin keluar?</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary"><a href="index.html" class="text-white">Logout</a></button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->