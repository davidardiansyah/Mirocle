<?php

use App\Http\Controllers\FisioTerapisController;
use App\Http\Controllers\PasienController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('fisioterapis');
});

Route::get('/fisioterapis',[FisioTerapisController::class,"index"])->name('fisioterapis.index');

Route::get('/fisioterapis/data-pasien',[FisioTerapisController::class,"data"])->name('fisioterapis.data');

Route::get('/fisioterapis/input-pasien',[FisioTerapisController::class,"input"])->name('fisioterapis.input');

Route::get('/fisioterapis/riwayat-pasien',[FisioTerapisController::class,"riwayat"])->name('fisioterapis.riwayat');


Route::get('/pasien',[PasienController::class,"index"])->name('pasien.index');

Route::get('/pasien/data',[PasienController::class,"biodata"])->name('pasien.biodata');

Route::get('/pasien/input',[PasienController::class,"grafik"])->name('pasien.grafik');


Auth::routes();
