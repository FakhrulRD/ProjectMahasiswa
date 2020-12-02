<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/index', function () {
    return view('AdminLayouts/index');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');

Route::get('/list', [HomeController::class, 'list'])->name('list');

Route::get('/Dosen', [HomeController::class, 'Dosen'])->name('Dosen');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
