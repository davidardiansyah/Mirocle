<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Exports\DataFinal;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SensorData;
use Carbon\Carbon;

class PasienController extends Controller
{
    public function index()
    {
        $profile = Profile::query()->where('user_id', '=', Auth::user()->id)->first();
        return view('layouts.pasien.dashboard', ['profile' => $profile]);
    }

    public function biodata()
    {
        return view('layouts.pasien.biodata');
    }

    public function grafik()
    {
        // $userId = auth()->user()->id; // Ambil ID pengguna yang sedang login
    
        // $query = SensorData::whereHas('user', function ($query) use ($userId) {
        //     $query->where('user_id', $userId);
        // });
        
        // $timestamps = $query->pluck('timestamp');
        
        // $labels = $timestamps->map(function ($timestamp) {
        //     $carbonTimestamp = Carbon::parse($timestamp);
        //     $label = $carbonTimestamp->format('H:i:s'); // Format label dengan tanggal dan waktu lengkap
        //     return $label;
        // });
        
        // $detak_jantung = $query->pluck('detak_jantung');
        // $saturasi_oksigen = $query->pluck('saturasi_oksigen');
        // $kalori = $query->pluck('kalori');
        // $putaran_pedal = $query->pluck('putaran_pedal');
        
        // return view('layouts.pasien.grafik', compact('labels', 'detak_jantung', 'saturasi_oksigen', 'kalori', 'putaran_pedal'));
        
        return view('layouts.pasien.grafik');
    }

    public function riwayat(Request $request)
    {
        $userId = auth()->user()->id; // Ambil ID pengguna yang sedang login
        $tanggal = $request->input('tanggal');
        
        $query = SensorData::whereHas('user', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        });
        
        if ($tanggal) {
            $tanggal = Carbon::parse($tanggal);
            $query->whereDate('timestamp', $tanggal);
        }
        
        $sensorData = $query->simplePaginate(10);
        
        return view('layouts.pasien.riwayat', compact('sensorData', 'tanggal'));
    }

    public function update_profile(Request $request)
    {
        Profile::query()->firstOrCreate([
            'user_id' => Auth::user()->id,
            'umur' => $request->umur,
            'berat_badan' => $request->berat_badan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'riwayat_penyakit' => $request->riwayat_penyakit,
        ]);
        return redirect('/pasien');
    }

    public function dashboard()
    {
        // Ambil data detak jantung terbaru dari session
        $detakJantung = session('detakjantung');
        return view('/layouts/pasien/dashboard', compact('detakJantung'));
    }

    public function exportexcel(){
        $userId = auth()->user()->id; // Ambil ID pengguna yang sedang login
        $fileName = 'data_final.xlsx';
    
        return Excel::download(new DataFinal($userId), $fileName);
    }

    // public function selectdata(Request $request)
    // {
    //     $tanggal = $request->input('tanggal');
    
    //     $query = SensorData::query();
    
    //     if ($tanggal) {
    //         $tanggal = Carbon::parse($tanggal);
    //         $query->whereDate('timestamp', $tanggal);
    //     }
    
    //     $sensorData = $query->paginate(5);
    
    //     return view('layouts.pasien.riwayat', compact('sensorData', 'tanggal'));
    // }
    

    }

