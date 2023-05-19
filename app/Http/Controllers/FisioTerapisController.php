<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SensorDataFinal;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Profile;


class FisioTerapisController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->where('role', '!=', 1)->get();
        $jumlahLakiLaki = $users->where('profile.jenis_kelamin', 1)->count();
        $jumlahPerempuan = $users->where('profile.jenis_kelamin', 2)->count();
       
        $sensorData = SensorDataFinal::orderBy('timestamp', 'desc')
            ->take(5)
            ->get();
    
        // Inisialisasi array untuk label dan jumlah pasien terapi
        $labels = [];
        $totalPasienTerapi = [];
    
        // Loop melalui setiap data sensor
        foreach ($sensorData as $data) {
            // Ambil timestamp
            $timestamp = $data->timestamp;
    
            // Ambil bulan dari timestamp
            $bulan = date('Y-m', strtotime($timestamp));
    
            // Jika bulan belum ada dalam array labels, tambahkan ke array labels
            if (!in_array($bulan, $labels)) {
                $labels[] = $bulan;
            }
    
            // Hitung jumlah pasien terapi berdasarkan bulan dan user ID
            $jumlahPasienTerapi = SensorDataFinal::where('user_id', $data->user_id)
                ->whereMonth('timestamp', date('m', strtotime($timestamp)))
                ->whereYear('timestamp', date('Y', strtotime($timestamp)))
                ->distinct('user_id') // Memastikan hanya menghitung user ID yang berbeda
                ->count('user_id');
    
            // Tambahkan jumlah pasien terapi ke array totalPasienTerapi
            $totalPasienTerapi[] = $jumlahPasienTerapi;
        }
    
        return view('layouts.fisioterapis.dashboard', compact('users', 'jumlahLakiLaki', 'jumlahPerempuan', 'labels', 'totalPasienTerapi'));
    }
        

    // akan dilakukan pagination
    public function data()
    {
        $users = User::with('profile')->where('role', '!=', 1)->simplePaginate(5);
        return view('layouts.fisioterapis.data', compact('users'));
    }

    // akan dilakukan pagination
    public function input()
    {
        $users = User::where('role', '!=', 1)->simplepaginate(5);
        return view('layouts.fisioterapis.input', compact('users'));
    }
    
    public function register()
    {
        return view('layouts.fisioterapis.register');
    }
    
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data pengguna berhasil dihapus.');
    }

    // akan dilakukan pagination
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

    public function grafik()
    {    
        return view('layouts.fisioterapis.grafik');
    }
}
