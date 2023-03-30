Route::prefix('fisioterapis')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Fisioterapis\DashboardController@index');
    Route::get('/data-pasien', 'App\Http\Controllers\Fisioterapis\DataPasienController@index');
    Route::get('/input-pasien', 'App\Http\Controllers\Fisioterapis\InputPasienController@index');
    Route::get('/riwayat-terapi', 'App\Http\Controllers\Fisioterapis\RiwayatTerapiController@index');
});
