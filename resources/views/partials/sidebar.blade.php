<nav class="sidebar sidebar-offcanvas" id="sidebar">
    @guest
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="/home"><img src="../../../assets/images/logo.svg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="/home"><img src="../../../assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
    @endguest
    @auth
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="/dashboard"><img src="../../../assets/images/logo.svg"
                    alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="/dashboard"><img src="../../../assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
    @endauth
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        @auth
            <li class="nav-item menu-items {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items {{ Request::is('itemmall', 'freemall', 'transaction') ? 'active' : '' }}">
                <a class="nav-link" href="/itemmall">
                    <span class="menu-icon">
                        <i class="mdi mdi-cart"></i>
                    </span>
                    <span class="menu-title">Mall</span>
                </a>
            </li>
        @else
            <li class="nav-item menu-items">
                <a class="nav-link" href="/home">
                    <span class="menu-icon">
                        <i class="mdi mdi-home"></i>
                    </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>
        @endauth
        @guest
            <li class="nav-item menu-items">
                <a class="nav-link" href="/register">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-plus"></i>
                    </span>
                    <span class="menu-title">Register</span>
                </a>
            </li>
        @endguest
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-information-outline"></i>
                </span>
                <span class="menu-title">Game Guide</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/topup">
                <span class="menu-icon">
                    <i class="mdi mdi-square-inc-cash"></i>
                </span>
                <span class="menu-title">Buy RPS</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#downloads" aria-expanded="false"
                aria-controls="downloads">
                <span class="menu-icon">
                    <i class="mdi mdi-download"></i>
                </span>
                <span class="menu-title">Download</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="downloads">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Google Drive</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Mega.nz</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Mediafire</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
