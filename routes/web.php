<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, UserController, GuruController,MapelController, SiswaController, KelasController};
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
    return view('auth.login');
});
Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'admin'], function () {
    Route::resource('guru', GuruController::class,);
    Route::resource('siswa', SiswaController::class,);
    Route::resource('user', UserController::class,);
    Route::resource('mapel', MapelController::class,);
    Route::resource('kelas', KelasController::class,);

});


