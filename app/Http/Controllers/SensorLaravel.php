<?php

namespace App\Http\Controllers;

use App\Models\Msensor;
use Illuminate\Http\Request;

class SensorLaravel extends Controller
{
    public function detakjantung()
    {
        $sensor = Msensor::latest()->first();
        if (!$sensor) {
            // Jika tidak ada data sensor ditemukan, kembalikan pesan error ke tampilan
            return view('detakjantung', ['error' => 'Data sensor tidak ditemukan']);
            // Kirim data sensor ke tampilan detakjantung
            return view('detakjantung', ['nilaisensor' => $sensor]);
        }
    }
}
