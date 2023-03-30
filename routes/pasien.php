Route::prefix('pasien')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Pasien\DashboardController@index');
    Route::get('/grafik', 'App\Http\Controllers\Pasien\GrafikController@index');
    Route::get('/profil', 'App\Http\Controllers\Pasien\ProfilController@index');
});
