
@extends('layouts.pasien.master')

@section('title')
    Grafik Pasien
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

            </div>
        </div>
@endsection