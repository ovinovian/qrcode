<?php

use App\Http\Controllers\OPDController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('opds', OPDController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);

Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {

});