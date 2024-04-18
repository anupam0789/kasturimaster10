 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link" target ="__blank">Visit Site</a>
      </li> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">{{ Auth::user()->name }}  
        <i class="fas fa-sort-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media"> 
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Profile
                  <span class="float-right text-sm text-danger"></span>
                </h3> 
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media"> 
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Logout 
                </h3> 
              </div>
            </div>
            <!-- Message End -->
          </a> 
        </div>
      </li> 
    </ul>
  </nav>
  <!-- /.navbar -->