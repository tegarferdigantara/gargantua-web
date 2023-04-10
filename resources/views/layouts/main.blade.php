<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exceed-Rohan</title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.9.97/css/materialdesignicons.min.css"
        integrity="sha512-PhzMnIL3KJonoPVmEDTBYz7rxxne7E3Lc5NekqcT3nxSLRTN2h2bJKStWoy0RfS31Jd6nBguC32sL6iK1k2OXw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet"> --}}
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        @include('partials.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    @guest
                        <a class="navbar-brand brand-logo-mini" href="/home"><img
                                src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
                    @endguest
                    @auth
                        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img
                                src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
                    @endauth
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="hidden" class="form-control">
                            </form>
                        </li>
                    </ul>
                    {{-- @auth
                        @can('isAdmin', \App\Models\User::class)
                            <ul class="navbar-nav navbar-nav-right {{ Request::is('dashboard/admin*') ? '' : 'd-none' }}">
                                <li class="nav-item dropdown">
                                    <div class="custom-control custom-switch d-lg-block">
                                        <input type="checkbox" id="myCheckbox" name="myCheckbox" value="12"
                                            data-toggle="toggle" data-on="Server<br>Online" data-off="Server<br>Offline"
                                            data-onstyle="success" data-offstyle="danger">
                                        <label>OFF<input type="checkbox" id="aksi" checked><span
                                                class="lever"></span>ON</label>

                                    </div>
                                </li>
                            </ul>
                        @endcan
                    @endauth --}}
                    <ul class="navbar-nav navbar-nav-right">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">

                                    <div class="navbar-profile">
                                        <img class="img-xs rounded-circle" src="../../../assets/images/faces/face28.jpg"
                                            alt="">
                                        <p class="mb-0 d-none d-sm-block navbar-profile-name">Hi,
                                            {{ auth()->user()->login_id }} </p>
                                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="profileDropdown">
                                    @can('isAdmin', \App\Models\User::class)
                                        <h6 class="p-3 mb-0">Admin Panel</h6>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item preview-item" href="/dashboard/admin">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-wrench text-info"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1">Control</p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                    @endcan
                                    <h6 class="p-3 mb-0">Profile</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item" href="/dashboard/settings">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-settings text-success"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Settings</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-logout text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content p-0">
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-transparent preview-subject mb-1text-start">
                                                    <span class="d-flex mb-2 mt-2 mr-2">&nbsp;Logout</span>
                                                </button>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-secondary hover:text-danger " href="/login"><i
                                        class="bi bi-box-arrow-in-right mr-2 "></i>Login</a>
                            </li>
                        @endauth
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (App\Models\IsMaintenance::select('maintenance')->first()->maintenance == 1)
                        {!! Request::is('dashboard', 'home')
                            ? '<div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert"><b>INFO:</b> Server is Under Maintenance, Sorry for the Inconvenience 🙏🙏<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                            : '' !!}
                    @endif

                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                {{-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer> --}}
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>
