 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="{{ asset('/admin/images/logo_white.jpg') }}"   alt="Kasturi Master Logo" > 
    </a>

    <!-- Sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open"> 
            <ul class="nav nav-treeview"> 
              <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link @if(Route::current()->getName() == 'admin.dashboard') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.customers')}}" class="nav-link @if(Route::current()->getName() == 'admin.customers') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer Leads
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.company')}}" class="nav-link @if(Route::current()->getName() == 'admin.company') active @endif">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Company
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li> 
          
          <li class="nav-item @if(Route::current()->getName() == 'admin.users' 
          || Route::current()->getName() == 'admin.add-user') menu-open @endif">
            <a href="#" class="nav-link @if(Route::current()->getName() == 'admin.users' || Route::current()->getName() == 'admin.add-user') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.users')}}" class="nav-link @if(Route::current()->getName() == 'admin.users') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.add-user')}}" class="nav-link @if(Route::current()->getName() == 'admin.add-user') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
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