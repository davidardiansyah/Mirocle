<?php

use App\Http\Controllers\FisioTerapisController;
use App\Http\Controllers\PasienController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorLaravel;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('fisioterapis')->group(function () {
        Route::get('/', [FisioTerapisController::class, 'index'])->name('fisioterapis.index');
        Route::get('/data-pasien', [FisioTerapisController::class, 'data'])->name('fisioterapis.data');
        Route::get('/input-pasien', [FisioTerapisController::class, 'input'])->name('fisioterapis.input');
        Route::get('/register', [FisioTerapisController::class, 'register'])->name('fisioterapis.register');
        Route::delete('/delete-user/{id}', [FisioTerapisController::class, 'deleteUser'])->name('delete_user');
        Route::get('/riwayat-pasien', [FisioTerapisController::class, 'riwayat'])->name('fisioterapis.riwayat');
    });

    Route::prefix('pasien')->group(function () {
        Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
        Route::get('/data', [PasienController::class, 'biodata'])->name('pasien.biodata');
        Route::get('/grafik', [PasienController::class, 'grafik'])->name('pasien.grafik');
        Route::post('/update-profile', [PasienController::class, 'update_profile'])->name('pasien.update_profile');
        Route::get('/exportexcel', [PasienController::class, 'exportexcel'])->name('exportexcel');
        Route::get('/riwayat', [PasienController::class, 'riwayat'])->name('pasien.riwayat');
        // Route::get('/selectdata', [PasienController::class, 'selectdata'])->name('pasien.selectdata');
    });
});

Route::get('/', function () {
    return redirect('login');
})->middleware('guest');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', [PasienController::class, 'dashboard'])->name('pasien.dashboard');
Route::get('/detakjantung', [SensorLaravel::class, 'detakjantung'])->name('detakjantung');


