<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\AnnungController;
use App\Http\Controllers\AsnurController;


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

/* Latihan modul */
Route::get("/testing-view", function () {
    return view("view-1");
});

Route::get("/utama/test", [UtamaController::class, "test"]);
Route::get("tema/bootstrap", [UtamaController::class, "index"]);


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



/* URL CONTROLLER 1 ANNUNG */
Route::get("/annung/home", [AnnungController::class, "home"]);
Route::get("/annung/about", [AnnungController::class, "about"]);
Route::get("/annung/product", [AnnungController::class, "product"]);
/* URL CONTROLLER 2 ASNUR */
Route::get("/asnur/team", [AsnurController::class, "team"]);
Route::get("/asnur/profile", [AsnurController::class, "profile"]);
Route::get("/asnur/contact", [AsnurController::class, "contact"]);
