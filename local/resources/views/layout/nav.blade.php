<nav class="navbar header-navbar pcoded-header " style="background: linear-gradient(to right, #11c788, #54e2b7)" >
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#">
                <i class="ti-menu"></i>
            </a>
            <a href="{{ url('backend') }}">
                <div class="logo_nav" >&nbsp;<i class="fa fa-cube"></i>&nbsp;&nbsp;&nbsp;ISAT System</div>
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <a href="#">
                        <span>{{ " User : ".Session::get('Mem_level') }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        {{-- <li >
                            <i class="ti-user"></i>{{ Session::get('Mem_name') }}
                        </li> --}}
                        <li>
                            <a href="{{ url('logout') }}">
                                <i class="icon-logout"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>