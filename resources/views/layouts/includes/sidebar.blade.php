{{-- <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item {{ request()->is('/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            <li class="nav-item {{ request()->is('/mobil') ? 'active' : '' }}">
                <a class="nav-link" href="/mobil">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Data Mobil</span>
                </a>
            </li>
            </li>
            <li class="nav-item  {{ request()->is('/user') ? 'active' : '' }}">
                <a class="nav-link" href="/user">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Data User </span>
                </a>
            </li>
            <li class="nav-item  {{ request()->is('/reservasi') ? 'active' : '' }}">
                <a class="nav-link" href="/reservasi">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Data Reservasi</span>
                </a>
            </li>
            <!-- <li class="nav-item  {{ request()->is('/perizinan') ? 'active' : '' }}">
            <a class="nav-link" href="/perizinan">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Perizinan</span>
            </a>
          </li> -->
            <li class="nav-item {{ request()->is('/rekap') ? 'active' : '' }}">
                <a class="nav-link" href="/rekap">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Laporan</span>
                </a>
            </li>
            <!-- <li class="nav-item {{ request()->is('/rekapsiswa') ? 'active' : '' }}">
            <a class="nav-link" href="/rekapsiswa">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Laporan Siswa</span>
            </a>
          </li> -->

        </ul>
    </nav>

    <!-- partial -->

    <!-- main-panel ends -->
    <!-- LEFT SIDEBAR --> --}}

<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>AZ TRANSZ</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('template/dashmin-1.0.0/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">AZ Transz</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('mobil') }}" class="nav-item nav-link {{ request()->routeIs('mobil') ? 'active' : '' }}"><i class="fa fa-car me-2"></i>Data Mobil</a>
            <a href="{{ route('user') }}" class="nav-item nav-link {{ request()->routeIs('user') ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Data User</a>
            <a href="{{ route('reservasi') }}" class="nav-item nav-link {{ request()->routeIs('reservasi') ? 'active' : '' }}"><i class="fa fa-book me-2"></i>Data Reservasi</a>
            <a href="{{ route('invoice.rekap') }}" class="nav-item nav-link {{ request()->routeIs('invoice.rekap') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Laporan</a>
        </div>
    </nav>
</div>
