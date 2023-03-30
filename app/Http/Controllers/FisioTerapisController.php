<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FisioTerapisController extends Controller
{
        public function index () {
        return view('/layouts/fisioterapis/dashboard');
    }
    public function data () {
        return view('/layouts/fisioterapis/data');
    }
    public function input () {
        return view('/layouts/fisioterapis/input');
    }
    public function riwayat () {
        return view('/layouts/fisioterapis/riwayat');
    }
}
