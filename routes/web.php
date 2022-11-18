<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, UserController,
     GuruController,MapelController,
     SiswaController, KelasController,
     FrontendController,BeritaController,
     GaleriController,NilaiController,TahunPelajaranController,KelasMapelController,KelasSiswaController};
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


Route::get('/',[FrontendController::class, 'index'])->name('frontend');
Route::get('/',[FrontendController::class, 'index'])->name('frontend');

// Route::resource('frontend', FrontendController::class,);

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'admin'], function () {
    Route::resource('guru', GuruController::class,);
    Route::resource('siswa', SiswaController::class,);
    Route::resource('user', UserController::class,);
    Route::resource('mapel', MapelController::class,);
    Route::resource('kelas', KelasController::class,);
    Route::resource('berita', BeritaController::class,);
    Route::resource('galeri', GaleriController::class);
    Route::resource('thpelajaran', TahunPelajaranController::class);
    Route::resource('kelas_mapel',KelasMapelController::class);
    Route::resource('kelas_siswa',KelasSiswaController::class);
    Route::resource('nilai',NilaiController::class);

    route::get('/changeStatus{id?}',[BeritaController::class,'changeStatus'])->name('changeStatus');

    // Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
// });


// Route::group(['middleware' => 'guru'], function () {
//     Route::resource('mapel', MapelController::class,);
//     Route::resource('kelas', KelasController::class,);
//     Route::resource('nilai', NilaiController::class,);
// });



