  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('public/template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pantau Air</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (auth()->user()->level=="user")
          <li class="nav-item">
            <a href="{{url('keasaman-air')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pantau Keasaman Air
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('kekeruhan-air')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pantau Kekeruhan Air
              </p>
            </a>
          </li>
          @endif
          @if (auth()->user()->level=="admin")
          <li class="nav-item">
            <a href="{{route('data-daerah')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Data Lokasi
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
