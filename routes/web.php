<?php

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

Route::get('/', function () {
    return view('welcome');
});

/* MEMBUAT 5 URL */
/* URL 1 */
Route::get('/nama', function () {
    return 'Perkenalkan Nama saya <b> Asnur Karima </b>';
});

/* URL 2 */
Route::get('/angkatan', function () {
    return 'Angkatan <b>2018</b>';
});

/* URL 3 */
Route::get('/jurusan', function () {
    return 'Jurusan <b> S1 Teknik Informatika </b>';
});

/* URL 4 */
Route::get('/universitas', function () {
    return 'Kuliah di <b>Universitas Muhammadiyah Kalimantan Timur</b>';
});

/* URL 5 */
Route::get('/alamat', function () {
    return 'Saya berasal dari <b>kota Bontang</b>';
});




Route::get("/testing-view", function () {
    return view("view-1");
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);


/* URL CONTROLLER 1 ANNUNG */

use App\Http\Controllers\AnnungController;

Route::get("/annung/one", [AnnungController::class, "one"]);
Route::get("/annung/two", [AnnungController::class, "two"]);
Route::get("/annung/three", [AnnungController::class, "three"]);

/* URL CONTROLLER 2 ASNUR */

use App\Http\Controllers\AsnurController;

Route::get("/asnur/satu", [AsnurController::class, "satu"]);
Route::get("/asnur/dua", [AsnurController::class, "dua"]);
Route::get("/asnur/tiga", [AsnurController::class, "tiga"]);
