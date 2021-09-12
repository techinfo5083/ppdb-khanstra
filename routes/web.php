<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Route::get('adminHome', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin:1');
Route::get('/dashboard', function()  { return view('admin/dashboard'); })->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
})->name('pendaftaran');

Route::get('/pengumuman', function () {
    return view('user.pengumuman');
})->name('pengumuman');

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });
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

Auth::routes();

