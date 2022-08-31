
<div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="{{ asset('adminlte/assets/images/logo/logo-1.png') }}"</a></div>

      <div class="dark-logo-wrapper"><a href="#"><img class="img-fluid" src="{{ asset('adminlte/assets/images/logo/logo-1_Dar.png') }}"  alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
    </div>
    <div class="left-menu-header col">
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li>
            <div class="mode"><i class="fa fa-moon-o"></i></i></div>
        </li>
        <li class="onhover-dropdown p-0">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-primary-light" type="submit"><i data-feather="log-out"></i>Log out</button>
            </form>
          </a>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
