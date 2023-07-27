<?php

use App\Http\Controllers\OPDController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('landing_page');
// });

Route::get('/tiket_peserta2', function () {
    return view('cetak_tiket_registrasi');
});

Route::get('/', [HomeController::class, 'landing_page']);
Route::get('/tiket_peserta', [HomeController::class, 'tiket_registrasi']);

Route::resource('opds', OPDController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);

Route::get('/qrcode', [QrCodeController::class, 'index']);
Route::get('/scan_qrcode', [QrCodeController::class, 'scan_qr']);

Route::group(['middleware' => ['auth']], function() {

});