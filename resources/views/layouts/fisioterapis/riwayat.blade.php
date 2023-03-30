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
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-thin fa-brain"></i>
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
                <a class="nav-link" href="data.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Pasien</span></a>
            </li>

                <!-- Nav Item - Input Pasien -->
                <li class="nav-item active">
                <a class="nav-link" href="input.php">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Input Pasien</span></a>
            </li>

            <!-- Nav Item - Riwayat Terapi -->
            <li class="nav-item active">
                <a class="nav-link" href="iriwayat.php">
                <i class="fas fa-fw fa-file-medical"></i>
                    <span>Riwayat Terapi</span></a>

                <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
            <div class="dropdown-divider"></div>
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between my-4">
                            <h1 class="h3 mt-3 text-gray-800">Riwayat Terapi</h1>
                        </div>
                    </div>
                </nav>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Terapi</th>
                        <th>Waktu</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Antonius Rio</td>
                        <td>03-Februari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>Arief Mahendra</td>
                        <td>10-Januari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>David Ardiansyah</td>
                        <td>05-Januari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>Antonius Rio</td>
                        <td>03-Februari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>Arief Mahendra</td>
                        <td>10-Januari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>David Ardiansyah</td>
                        <td>05-Januari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                                        <tr>
                        <td>Antonius Rio</td>
                        <td>03-Februari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                    <tr>
                        <td>Arief Mahendra</td>
                        <td>10-Januari-2023</td>
                        <td>20.00 - 21.05 WIB</td>
                        <td>5 menit</td>   
                    </tr>
                </tbody>
            </table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
    <li class="page-item disabled">
    <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#">Next</a>
    </li>
</ul>
</nav>

</body>

</html>