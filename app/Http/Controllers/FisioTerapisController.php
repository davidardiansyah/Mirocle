<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return view('/layouts/fisioterapis/riwayat');
    }
}
