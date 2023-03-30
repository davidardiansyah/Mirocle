@extends('layouts.fisioterapis.master')

@section('title')
    Data Pasien
@endsection

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-bordered table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Berat Badan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Riwayat Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Antonius Rio</td>
                                        <td>50 Tahun</td>
                                        <td>60 Kg</td>
                                        <td>Laki-laki</td>
                                        <td>Stroke bagian kanan</td>
                                    </tr>
                                    <tr>
                                        <td>Arief Mahendra</td>
                                        <td>45 Tahun</td>
                                        <td>65 Kg</td>
                                        <td>laki-laki</td>
                                        <td>Stroke bagian kanan</td>
                                    </tr>
                                    <tr>
                                        <td>David Ardiansyah</td>
                                        <td>60 Tahun</td>
                                        <td>70 Kg</td>
                                        <td>laki-laki</td>
                                        <td>Stroke bagian kiri</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
