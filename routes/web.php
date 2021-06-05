<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;

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
    return redirect('mahasiswa');
});

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);

//langsung banyak controller
// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);
