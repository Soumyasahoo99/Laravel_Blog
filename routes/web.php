<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\commentcontroller;
use App\Http\Controllers\StripeController;
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
Route::get('/home', [HomeController::class, 'index'])->middleware('paymentcheck');
Route::post('tag', [TagController::class, 'storetag'])->name('tag'); //->middleware('CheckTag');
Route::get('/delete/{id}', [TagController::class, 'destroy'])->middleware('CheckTag');
Route::post('postssss', [HomeController::class, 'savepost'])->name('postssss');
Route::get('/postview/{id}', [postController::class, 'viewpost']); //->name('postview');
Route::post('/comment/{id}', [commentcontroller::class, 'storecomment'])->name('comment');
Route::get('/tagdetaiils/{id}', [postController::class, 'viewtag']); //->name('postview');
Route::get('/notification', [HomeController::class, 'sendnotification'])->name('notification');
Route::get('/Markasread', [HomeController::class, 'marknotification']);

Route::get('/paymentplan', function () {
    return view('planstripe');
});
Route::get('stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::post('payment', [StripeController::class, 'stripepayment'])->name('payment');

Route::get('/cancell', [StripeController::class, 'cancellpayment']);
