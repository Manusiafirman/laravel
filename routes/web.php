<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('/nama', function () {
    return view('nama');
});
Route::get('/tanggal', function () {
    return view('tanggal');
});
Route::get('/alamat', function () {
    return view('alamat');
});
Route::get('/hobi', function () {
    return view('hobi');
});
Route::get('/teman', function () {
    return view('teman');
});

Route::get('/yayasan', function () {
    return view('firman');
});

Route::get('page/{page?}', function ($hal = 2){
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello Word"){
    return "<b> $nama </b>";
});
