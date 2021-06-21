<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//CUSTOM LOGIN ROUT WITHOUT ANY LOGIN AUTH PACKAGE, USING LARAVEL DEFAULT AUTH SYSTEM
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware(['guest']);

/*
/ sleep middleware used for hitting post login route after a time of period from submiting ajax request. e.g 3 second.
/ Have created this route as i have used some animation on login page, to make sure animation
/ load minimum 3 second before hitting post login route.
*/
Route::post('login', [AuthController::class, 'login'])->middleware(['guest','sleep']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::resource('post', PostController::class);
});

