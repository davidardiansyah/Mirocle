<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <Title>MIROCLE</Title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MIROCLE </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>

                <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="grafik.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafik</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <div class="dropdown-divider"></div>
                <a class="nav-link" href="biodata.php">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Profile</span></a>

                <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
                </a>
            </li>
            <!-- Logout Modal-->
            <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="container rounded bg-white">
            <div class="row">
                <div class="col-md-3 border-right">
                </div>
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 ">
                        <img class="rounded-circle " width="120px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    </div>
                    <div class="p-3 ">


                        <div class="row">
                            <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Masukan nama" value=""></div>
                            <div class="col-md-12"><label class="labels">Umur</label><input type="text" class="form-control" placeholder="Masukan umur" value=""></div>
                            <div class="col-md-12"><label class="labels">Berat Badan</label><input type="text" class="form-control" placeholder="Masukan berat badan" value=""></div>
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label><input type="text" class="form-control" placeholder="Masukan jenis kelamin" value=""></div>
                            <div class="col-md-12"><label class="labels">Riwayat Penyakit</label><input type="text" class="form-control" placeholder="Masukan riwayat penyakit" value=""></div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </div>
    </div>
</Body>