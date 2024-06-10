<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">Saba University</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block ps-2">{{session('user.first_name').' "'. session('user.last_name'). '" '}}</span>
          </a>

        </li>
      </ul>
    </nav>

  </header>