<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msensor;


class SensorLaravel extends Controller
{
    public function detakjantung()
    {
        //baca nilai/isi tabel sensor_realtime dan ambil nilai jantung
        $sensor = Msensor::latest()->first();
        // Kirim data detak jantung terbaru ke halaman dashboard pasien
        return redirect()->route('pasien.dashboard')->with('detakjantung', $sensor->jantung);
    }
}
