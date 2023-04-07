@extends('layouts.fisioterapis.master')

@section('title')
    Input Pasien
@endsection

@section('content')
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
                                            <th>User Name</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Antonius Rio</td>
                                            <td>Antonius</td>
                                            <td>12345</td>
                                        </tr>
                                        <tr>
                                            <td>Arief Mahendra</td>
                                            <td>Arief</td>
                                            <td>12345</td>
                                        </tr>
                                        <tr>
                                            <td>David Ardiansyah</td>
                                            <td>David</td>
                                            <td>12345</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input class="btn btn-primary" type="Tambahkan Pasien" value="Tambahkan Pasien">
                            </div>
                        </div>
                    </div>
@endsection
