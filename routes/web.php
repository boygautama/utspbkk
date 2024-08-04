<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianBarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LaundryMemberController;
use App\Http\Controllers\LaundryNonMemberController;
use App\Http\Controllers\LayananController;


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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::resource('/users', UserController::class);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/barang', BarangController::class);
Route::resource('/pembelian-barang', PembelianBarangController::class);
Route::resource('/member', MemberController::class);
Route::resource('/laundry-member', LaundryMemberController::class);
Route::resource('/laundry', LaundryNonMemberController::class);
Route::resource('/layanan', LayananController::class);
});


