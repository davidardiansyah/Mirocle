<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class PasienController extends Controller
{
    public function index()
    {
        $profile = Profile::query()->where('user_id', '=', Auth::user()->id)->first();
        return view('/layouts/pasien/dashboard', compact('profile'));
    }

    public function biodata()
    {
        return view('/layouts/pasien/biodata');
    }

    public function grafik()
    {
        return view('/layouts/pasien/grafik');
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
}
