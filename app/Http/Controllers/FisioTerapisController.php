<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SensorDataFinal;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class FisioTerapisController extends Controller
{
    public function index()
    {
        return view('/layouts/fisioterapis/dashboard');
    }
    public function data()
    {
        $users = User::with('profile')->get();
        // dd($users);
        return view('/layouts/fisioterapis/data', compact('users'));
    }
    public function input()
    {
        $users = User::all()->where('role', '!=', 1);
        return view('/layouts/fisioterapis/input', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data pengguna berhasil dihapus.');
    }

    public function riwayat()
    {  
        $query = SensorDatafinal::orderBy('id', 'desc');
        $pasien = User::where('role', '!=', 1)->get();
      
        $sensorDataFinal = $query->get();
    
        $sensorDataFinal->load('user'); // Melakukan eager loading relasi 'user'
    
        $sensorDataFinal->transform(function ($data) {
            $data->timestamp = Carbon::createFromTimestamp($data->id_terapi);
            return $data;
        });
    
        $currentPage = request()->get('page', 1);
        $perPage = 10; // Ubah angka ini sesuai dengan jumlah item yang ingin ditampilkan per halaman
        $offset = ($currentPage - 1) * $perPage;
        $sensorDataFinal = new LengthAwarePaginator(
            $sensorDataFinal->slice($offset, $perPage),
            $sensorDataFinal->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    
        return view('layouts.fisioterapis.riwayat', compact('sensorDataFinal', 'pasien'));
    }
    
}
