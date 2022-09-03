 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('template')}}" class="nav-link">Beranda</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        @if(Auth::check())
          {{request()->user()->nama}}
        @else
          Silahkan Login
        @endif
        <img src="{{url('public')}}/dist/img/avatar2.png" class="img-circle elevation-2" style="height:100%;" alt="User Image"> 
        </a>
        <div class="dropdown-menu dropdown-m\enu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class=" fa fa-cog"></i>Profile
          </a>
          <a href="#" class="dropdown-item">
            <i class=" fa fa-cog"></i>Setting
          </a>
          <a href="{{url('/logout')}}" class="dropdown-item">
            <i class=" fa fa-sign-out"></i>Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>