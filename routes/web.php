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

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/semuaData', function () {
    return view('admin/dataAll');
});
Route::get('/rekayasaPerangkatLunak', function () {
    return view('admin/rpl');
});
Route::get('/officeManagement', function () {
    return view('admin/om');
});
Route::get('/akutansi', function () {
    return view('admin/ak');
});
Route::get('/teknikSepedaMotor', function () {
    return view('admin/tsm');
});
