<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msensor;


class SensorLaravel extends Controller
{
    public function detakjantung()
    {
        //baca nilai/isi tabel sensor_realtime dan ambil nilai jantung

        $sensor = Msensor::latest('id')->first();
        return response()->json($sensor);
    }
}
