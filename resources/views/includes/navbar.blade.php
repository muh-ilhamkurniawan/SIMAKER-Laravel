<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
          <i class="fe fe-sun fe-16"></i>
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-muted my-2" href="#">
          <h6>{{ Auth::user()->name }}</h6> <!-- Menampilkan username -->
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="avatar avatar-sm mt-2">
            <img src="{{ asset('images/kai.png') }}" alt="..." class="avatar-img rounded-circle">
          </span>
        </a>
        
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Keluar
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>
      </li>

    </ul>
  </nav>
  <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">       
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/" id="logo">
          <span class="avatar avatar-sm mt-2" >
            <img src="{{ asset('images/kai.svg') }}" alt="...">
          </span>
        </a>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item">
        <a href="/"  class="nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Components</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Kereta</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="/train/create"><span class="ml-1 item-text">Tambah Kereta</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/train"><span class="ml-1 item-text">Lihat Data Kereta</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="home.php?r=import_kereta"><span class="ml-1 item-text">Import Data Kereta</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Kategori</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="tables">
            <li class="nav-item">
              <a class="nav-link pl-3" href="/category/create"><span class="ml-1 item-text">Input Kategori</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/category"><span class="ml-1 item-text">Lihat Data Kategori</span></a>
            </li>                
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-pie-chart fe-16"></i>
            <span class="ml-3 item-text">Keterlambatan</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="charts">
            <li class="nav-item">
              <a class="nav-link pl-3" href="home.php?r=input_keterlambatan"><span class="ml-1 item-text">Input Kereta Terlambat</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/keterlambatan"><span class="ml-1 item-text">Laporan Kereta Terlambat</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Pengguna</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="profile">
            <a class="nav-link pl-3" href="/users/create"><span class="ml-1">Input Pengguna</span></a>
            <a class="nav-link pl-3" href="/users"><span class="ml-1">Lihat Data Pengguna</span></a>
            <a class="nav-link pl-3" href="home.php?r=aktivitas_pengguna"><span class="ml-1">Aktivitas Pengguna</span></a>
          </ul>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Documentation</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="https://drive.google.com/drive/folders/1tPgN_U5jQ-GrAbes7q9glwA6_E55qiLZ?usp=sharing" target="_blank">
            <i class="fe fe-help-circle fe-16"></i>
            <span class="ml-3 item-text">Getting Start</span>
          </a>
        </li>
      </ul>
      <div class="btn-box w-100 mt-4 mb-1">
        <a href="https://www.kai.id/" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
          <i class="fe fe-check-circle fe-12 mx-2"></i><span class="small">Website Resmi KAI</span>
        </a>
      </div>
    </nav>
  </aside>