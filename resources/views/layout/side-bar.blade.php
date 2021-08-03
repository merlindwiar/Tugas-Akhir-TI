  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('template')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pantau Air</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/edit-profil" class="d-block">Petugas</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <ion-icon name="apps-sharp"></ion-icon>
              <p>
                Dashboard
              </p>
            </a>
           </li>
           {{-- <li class="nav-item">
             <a href="{{url('/pantau/tinggi-air')}}" class="nav-link">
                <a href="/tinggi-air" class="nav-link">
                <ion-icon name="water-sharp"></ion-icon>
              <p>
                Pantau Tinggi Air
              </p>
            </a>
          </li>  --}}
          <li class="nav-item">
            <a href="/keasaman-air" class="nav-link">
                <ion-icon name="list-sharp"></ion-icon>
              <p>
                Pantau Keasaman Air
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kekeruhan-air" class="nav-link">
                <ion-icon name="list-sharp"></ion-icon>
              <p>
                Pantau Kekeruhan Air
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="/pantau-daerah" class="nav-link">
                <ion-icon name="location-sharp"></ion-icon>
              <p>
                Titik Pantau
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="/edit-profil" class="nav-link">
                <ion-icon name="person-sharp"></ion-icon>
              <p>
                Edit Profil
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

