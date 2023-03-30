@extends('layouts.fisioterapis.master')

@section('title')
    Input Pasien
@endsection

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between my-4">
                            <h1 class="h3 mt-3 text-gray-800">Input Pasien</h1>
                        </div>
                    </div>
                </nav>

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

</body>

</html>
