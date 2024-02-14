<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('index') }}"><img
                src="images/WhatsApp Image 2023-08-07 at 12.58.32.jpg" alt="logo" /></a>
        {{-- <h2>Taha's Admin</h2> --}}
        <a class="navbar-brand brand-logo-mini" href="{{ route('index') }}"><img
                src="images/WhatsApp Image 2023-07-26 at 15.29.02.jpg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item  dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false"> Website </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                    <a class="dropdown-item" href="{{ route('index') }}">
                        <i class="mdi mdi-eye-outline mr-2"></i>My Site</a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ session('adminemail') }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-2">
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                            href="{{ route('logout') }}">
                            <span>Log Out</span>
                            <i class="mdi mdi-logout ml-1"></i>
                        </a>
                    </div>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-category text-muted">Navigations</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminpage') }}">
                    <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                    <span class="menu-title">Admin Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('uploadProductsPage') }}">Products
                                Upload
                            </a></li>

                        <li class="nav-item"> <a class="nav-link" href="{{ route('customersPage') }}"> Registered
                                Customers
                            </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('ordersPage') }}"> Orders
                            </a>
                        </li>


                    </ul>
                </div>
            </li>

            <li class="nav-item sidebar-user-actions">
                <div class="user-details">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="sidebar-profile-img">
                                    <i class="fa fa-user-circle"></i>

                                </div>
                                <div class="sidebar-profile-text">
                                    <p class="mb-1">{{ session('adminemail') }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                    <a href="{{ route('logout') }}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">Log Out</span></a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- partial -->
