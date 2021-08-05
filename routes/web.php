<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
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

// Route::get('/home',[blogcontroller::class,'index']);
// // Route::get('post',[postController::class,'index']);
// Route::get('add-post',[postController::class,'create']);
// Route::post('add-post',[postController::class,'store']);
// Route::get('show-post',[postController::class,'show']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('tag',[TagController::class,'storetag'])->name('tagss');
Route::post('postssss',[HomeController::class,'savepost'])->name('postssss');

