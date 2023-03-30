<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <Title>MIROCLE</Title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('js/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-thin fa-brain"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MIROCLE </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('fisioterapis.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Nav Item - Data Pasien -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('fisioterapis.data') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Pasien</span>
                </a>
            </li>
            <!-- Nav Item - Input Pasien -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('fisioterapis.input') }}">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Input Pasien</span>
                </a>
            </li>
            <!-- Nav Item - Riwayat Terapi -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('fisioterapis.riwayat') }}">
                    <i class="fas fa-fw fa-file-medical"></i>
                    <span>Riwayat Terapi</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <div class="dropdown-divider"></div>
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between my-4">
                            <h1 class="h3 mt-3 text-gray-800">@yield('title')</h1>
                        </div>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in shadow"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Februari 01, 2023</div>
                                            <span class="font-weight-bold">David Ardiansyah melakukan terapi</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Januari 12, 2023</div>
                                            David Ardiansyah melakukan terapi
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 07, 2022</div>
                                            Arief Mahendra melakukan terapi
                                        </div>
                                    </a>
                                    <a class="dropdown-item small text-center text-gray-500" href="#">Show All
                                        Alerts</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-none d-lg-inline small mr-2 text-gray-600">Dr. Adre Mayza
                                        Rachman</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                </div>
                            </li>

                        </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content Row -->
                @yield('content')

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Bootstrap core JavaScript-->
                <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ asset('js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

                <!-- Page level plugins -->
                <script src="{{ asset('js/vendor/chart.js/Chart.min.js') }}"></script>

                <!-- Page level custom scripts -->
                <script src="{{ asset('js/demo/chart-area-demo-total.php') }}"></script>
                <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
            </div>
        </div>
    </div>
</body>

</html>
