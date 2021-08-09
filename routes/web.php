<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\commentcontroller;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('tag',[TagController::class,'storetag'])->name('tagss');
Route::post('postssss',[HomeController::class,'savepost'])->name('postssss');
Route::get('postview/{id}',[postController::class,'viewpost'])->name('postview');
Route::post('/comment/{id}',[commentcontroller::class,'storecomment'])->name('comment');
Route::get('/tagdetaiils/{id}',[postController::class,'viewtag'])->name('postview');
Route::get('/notification', [HomeController::class,'sendnotification'])->name('notification');






