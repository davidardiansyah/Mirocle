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
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('fisioterapis')->controller(FisioTerapisController::class)->group(function (){
        Route::get('/',"index")->name('fisioterapis.index');
        Route::get('/data-pasien',"data")->name('fisioterapis.data');
        Route::get('/input-pasien',"input")->name('fisioterapis.input');
        Route::get('/riwayat-pasien',"riwayat")->name('fisioterapis.riwayat');
    });
    
    Route::prefix('pasien')->controller(PasienController::class)->group(function (){
        Route::get('/', "index")->name('pasien.index');
        Route::get('/data', "biodata")->name('pasien.biodata');
        Route::get('/input', "grafik")->name('pasien.grafik');
    });
});

Route::get('/', function () {
    return redirect('fisioterapis');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
