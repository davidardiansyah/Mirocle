<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msensor;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class SensorLaravel extends Controller
{
    public function detakjantung()
    {
        $userId = auth()->user()->id;
        $sensor = Msensor::whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        })->latest('id')->first();
        
        return response()->json($sensor);
    }
}
