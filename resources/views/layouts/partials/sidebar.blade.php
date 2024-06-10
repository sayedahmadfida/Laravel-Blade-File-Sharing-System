  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
          <span
              class="brand-text font-weight-light">{{ session('user.first_name') . ' "' . session('user.last_name') . '"' }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="{{ route('dashboard.index') }}" class="nav-link">
                          <i class="fa-solid fa-gauge"></i>
                          <p class="pl-2">Dashboard</p>

                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" data-toggle="modal" data-target="#new-folder-modal" class="nav-link">
                          <i class="fa-solid fa-folder-open"></i>
                          <p class="pl-2">Create Folder</p>

                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                          <i class="fa-solid fa-right-from-bracket"></i><p class="pl-2">Log out</p>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </li>


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
