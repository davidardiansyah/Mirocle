@extends('layout')
@section('tittle')
Dashboard
@endsection
@section('content')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Content Row -->
                <div class="row w-100 justify-content-center">

                    <!-- Detak jantung -->
                    <div class="col-auto mb-4">
                        <div class="card border-left-primary shadowy">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Detak Jantung</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">80/BPM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Durasi -->
                    <div class="col-auto mb-4">
                        <div class="card border-left-warning shadowy">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Durasi</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10 Menit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Saturasi Oksigen -->
                    <div class="col-auto mb-4">
                        <div class="card border-left-info shadowy">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Saturasi Oksigen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jumlah Putaran Pedal -->
                    <div class="col-auto mb-4">
                        <div class="card border-left-success shadowy">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Jumlah Putaran Pedal</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jumlah Kalori Terbakar -->
                    <div class="col-auto mb-4">
                        <div class="card border-left-danger shadowy">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Jumlah Kalori Terbakar</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">2500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Total Terapi Sepeda Cermin</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Biodata Pasien</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img class="rounded-circle " width="130px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    </div>
                                    <div class="col-md-10 mx-10"><label class="labels">Nama : David Ardiansyah</label></div>
                                    <div class="col-md-10 mx-10"><label class="labels">Umur : 20th</label></div>
                                    <div class="col-md-10 mx-10"><label class="labels">Berat Badan : 70kg</label></div>
                                    <div class="col-md-10 mx-10"><label class="labels">Jenis Kelamin : Laki-laki</label></div>
                                    <div class="col-md-10 mx-10"><label class="labels">Riwayat Penyakit : Stroke kanan</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
{{-- 
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script> --}}
        </div>
    </div>
    </div>
</body>
@endsection
