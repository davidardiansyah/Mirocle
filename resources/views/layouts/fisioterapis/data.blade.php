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
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->profile->umur ?? '-' }}th</td>
                                            <td>{{ $user->profile->berat_badan ?? '-' }}Kg</td>
                                            <td>{{ $user->profile->jenis_kelamin ?? '-' }}</td>
                                            <td>{{ $user->profile->riwayat_penyakit ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection