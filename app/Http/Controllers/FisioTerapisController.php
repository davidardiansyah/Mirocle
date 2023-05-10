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
        return view('/layouts/fisioterapis/data');
    }
    public function input()
    {
        $users = User::all()->where('role', '!=', 1);
        return view('/layouts/fisioterapis/input', compact('users'));
    }
    public function riwayat()
    {
        return view('/layouts/fisioterapis/riwayat');
    }
}
