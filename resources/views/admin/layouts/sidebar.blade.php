<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html') }}" class="brand-link">
    <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Citra Mahkota Mandiri</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <ul class="user-panel mt-3 mb-2 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="user"
      data-accordion="false">
      <li class="nav-item mb-3">
        <a href="{{ url('admin/profile') }}" class="nav-link">
          <img src="{{ asset('adminlte3/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2 mr-2"
            alt="User Image">
          {{ Auth::user()->name}} <span class="caret"></span>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/profile') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="far fa-circle nav-icon"></i>
              <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </li>

      {{-- <div class="image">
        <img src="{{ asset('adminlte3/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
  </div>
  <div class="info">
    <a href="#" class="d-block">Alexander Pierce</a>
  </div> --}}
  </ul>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>

      </li>

      <li class="nav-item">
        <a href="{{ url('admin/kategori') }}" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Kategori
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/kategori/create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buat Kategori</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/kategori') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Kategori</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ url('admin/satuan') }}" class="nav-link">
          <i class="nav-icon fas fa-cubes"></i>
          <p>
            Satuan
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/satuan/create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buat Satuan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/satuan') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Satuan</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-tags"></i>
          <p>
            Produk
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/produk/create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buat Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/produk') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Produk</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Transaksi
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/transaksi/create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Import Transaksi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/transaksi/index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar Transaksi</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Barang
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('admin/barang/create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Create barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/barang') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Daftar barang</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>