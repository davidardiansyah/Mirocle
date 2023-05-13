@extends('layouts.pasien.master')

@section('title')
    Biodata Pasien
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div class="container rounded bg-white">
        <div class="row">
            <div class="col-md-3 border-right">
            </div>
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center p-3 text-center">
                    <img class="rounded-circle" width="120px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                </div>
                <div class="p-3">

                    <form method="POST" action="{{ route('pasien.update_profile') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control"
                                    placeholder="Masukan nama" value="{{ Auth::user()->name }}" disabled></div>
                            <div class="col-md-12"><label class="labels">Umur</label><input type="text" name="umur"
                                    class="form-control" placeholder="Masukan umur" value=""></div>
                            <div class="col-md-12"><label class="labels">Berat Badan</label><input type="text"
                                    name="berat_badan" class="form-control" placeholder="Masukan berat badan" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label><input type="text"
                                    name="jenis_kelamin" class="form-control" placeholder="Masukan jenis kelamin"
                                    value=""></div>
                            <div class="col-md-12"><label class="labels">Riwayat Penyakit</label><input type="text"
                                    name="riwayat_penyakit" class="form-control" placeholder="Masukan riwayat penyakit"
                                    value=""></div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                    Profile</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
