<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
            <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>General</h6>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ route('home') }}" class="">Default</a></li>
                        <li><a href="https://laravel.pixelstrap.com/viho/dashboard/dashboard-02" class="">Ecommerce</a></li>
                    </ul>
                </li>
                @if(Auth::user()->role_id == 1)
                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ url('guru') }}" class="">Guru</a></li>
                        <li><a href="{{ route('mapel.index') }}" class="">Mapel</a></li>
                        <li><a href="https://laravel.pixelstrap.com/viho/dashboard/dashboard-02" class="">Siswa</a></li>
                        <li><a href="{{ url('siswa') }}" class="">Siswa</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>
