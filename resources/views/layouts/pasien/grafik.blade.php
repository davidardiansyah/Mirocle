@extends('layout')
@section('tittle')
    Grafik
@endsection
@section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart Detak Jantung -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Detak Jantung</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="jantung"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Area Chart Durasi -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Durasi</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="durasi"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Area Chart Saturasi Oksigen -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Saturasi Oksigen</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="saturasi"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Area Chart Jumlah Putaran Pedal -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Jumlah Putaran Pedal</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="pedal"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Area Chart jumlah kalori yang terbakar -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">jumlah kalori yang terbakar</h6>
                                <div class="dropdown no-arrow">
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="kalori"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                {{-- <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo-jantung.php"></script>
                <script src="js/demo/chart-area-demo-durasi.php"></script>
                <script src="js/demo/chart-area-demo-saturasi.php"></script>
                <script src="js/demo/chart-area-demo-pedal.php"></script>
                <script src="js/demo/chart-area-demo-kalori.php"></script> --}}
            </div>
        </div>
@endsection