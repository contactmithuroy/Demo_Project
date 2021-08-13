  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">{{ strtoupper(Auth::user()->name) ?? 'Lara Sore' }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link @yield('dashboard_select') ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link @yield('category_select') ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('manage.user') }}" class="nav-link @yield('manage_user') ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 Manage User
              </p>
            </a>
          </li>

          @can('isSuperAdmin')
          <li class="nav-item">
            <a href="" class="nav-link @yield('category_select') ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Super Admin
              </p>
            </a>
          </li>
          @elsecan('isAdmin')
          <li class="nav-item">
            <a href="" class="nav-link @yield('brand_select') ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="" class="nav-link @yield('brand_select') ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a href="{{ route('custom_logout') }}"  class="nav-link ">
              <i class="nav-icon fa fa-trash"></i>
              <p>Logout 
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>