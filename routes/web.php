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
Route::get('/dashboard', function()  { $data = ['tittle' => 'Dashboard']; return view('admin/dashboard', $data); })->middleware('is_admin');
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
    $data = [
        'tittle' => 'Semua Data'
    ];
    return view('admin/dataAll', $data);
});
Route::get('/rekayasaPerangkatLunak', function () {
    $data = [
        'tittle' => 'Rekayasa Perangkat Lunak'
    ];
    return view('admin/rpl', $data);
});
Route::get('/officeManagement', function () {
    $data = [
        'tittle' => 'Office Managament'
    ];
    return view('admin/om', $data);
});
Route::get('/akutansi', function () {
    $data = [
        'tittle' => 'Komputer Akutansi'
    ];
    return view('admin/ak', $data);
});
Route::get('/teknikSepedaMotor', function () {
    $data = [
        'tittle' => 'Teknik Sepeda Motor'
    ];
    return view('admin/tsm', $data);
});

Route::get('/printDataSiswa', function() {
    return view('admin.print.allSiswa');
})->name('printAllSiswa');


Auth::routes();

