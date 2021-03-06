<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Route::get('/', [SiteController::class, 'index' ])->name('index');
Route::get('/oferta/{id}', [SiteController::class, 'oferta_academica'])->name('oferta_academica');
Route::get('/difusion', [SiteController::class, 'difusion_universitaria'])->name('difusion_universitaria');