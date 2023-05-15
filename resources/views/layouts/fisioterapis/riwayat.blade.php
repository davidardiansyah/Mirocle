
@extends('layouts.fisioterapis.master')

@section('title')
    Riwayat Terapi
@endsection

@section('content')
     <div class="container-fluid">
        <div class="card mb-4 shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Nama </th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Rata Rata Detak jantung</th>
                                <th class="text-center">Jumlah Kalori</th>
                                <th class="text-center">Jumlah Putaran Pedal</th>
                                <th class="text-center">Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sensorDataFinal as $data)
                                <tr>
                                    <td class="text-center">{{ $data->detak_jantung != 0 ? $data->detak_jantung : '-' }}</td>
                                    <td class="text-center">{{ $data->timestamp->format('Y-m-d H:i:s') }}</td>
                                    <td class="text-center">{{ $data->rata_rata_detak_jantung != 0 ? $data->rata_rata_detak_jantung : '-' }}</td>
                                    <td class="text-center">{{ $data->kalori_total != 0 ? $data->kalori_total : '-' }}</td>
                                    <td class="text-center">{{ $data->putaran_pedal != 0 ? $data->putaran_pedal : '-' }}</td>
                                    <td class="text-center">{{ $data->durasi != 0 ? $data->durasi : '-' }}</td>
                                   </tr>
                             @endforeach
                        </tbody>
                    </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection