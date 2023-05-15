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
        return view('layouts.pasien.grafik');
    }

    public function riwayat()
    {
        $sensorData = SensorData::all();
        return view('layouts.pasien.riwayat', compact('sensorData'));
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
        return Excel::download (new DataFinal, 'data_final.xlsx');
    }

    public function selectdata(Request $request)
    {
        $tanggal = $request->input('tanggal');
    
        $query = SensorData::query();
    
        if ($tanggal) {
            $tanggal = Carbon::parse($tanggal);
            $query->whereDate('timestamp', $tanggal);
        }
    
        $sensorData = $query->paginate(10);
    
        return view('layouts.pasien.riwayat', compact('sensorData', 'tanggal'));
    }
    

    }

