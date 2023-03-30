<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index () {
        return view('/layouts/pasien/dashboard');
    }

    public function biodata () {
        return view('/layouts/pasien/biodata');
    }
    
    public function grafik () {
        return view('/layouts/pasien/grafik');
    }

}
