
@extends('layouts.pasien.master')

@section('title')
    Riwayat Pasien
@endsection

@section('content')
     <div class="container-fluid">
        <div class="card mb-4 shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Detak Jantung</th>
                                <th class="text-center">Saturasi Oksigen</th>
                                <th class="text-center">Kalori</th>
                                <th class="text-center">Jumlah Putaran Pedal</th>
                                <th class="text-center">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sensorData as $data)
                                <tr>
                                    <td class="text-center">{{ $data->detak_jantung != 0 ? $data->detak_jantung : '-' }}</td>
                                    <td class="text-center">{{ $data->saturasi_oksigen != 0 ? $data->saturasi_oksigen : '-' }}</td>
                                    <td class="text-center">{{ $data->kalori != 0 ? $data->kalori : '-' }}</td>
                                    <td class="text-center">{{ $data->putaran_pedal != 0 ? $data->putaran_pedal : '-' }}</td>
                                    <td class="text-center">{{ $data->timestamp }}</td>
                                   </tr>
                             @endforeach
                        </tbody>
                    </table>
                        <form method="GET" action="{{ route('pasien.selectdata') }}">
                            <div class="form-group">
                                <label for="tanggal">Pilih Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    <div class="mt-3">
                        @if (isset($tanggal))
                            <div class="alert alert-info">
                                Menampilkan data untuk tanggal: {{ $tanggal->format('Y-m-d') }}
                            </div>
                        @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection