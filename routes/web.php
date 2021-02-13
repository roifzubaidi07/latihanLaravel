<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/mahasiswa', [StudentController::class, 'index']);
Route::post('/mahasiswa', [StudentController::class, 'store']);
Route::get('/mahasiswa/tambah', [StudentController::class, 'create']);
Route::get('/mahasiswa/{student}', [StudentController::class, 'show']);
