<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('Login', [AuthController::class, 'showLogin'])->name('login');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postlogin');

Route::group(['middleware' => 'auth'], function(){

    Route::get('Home', [HomeController::class, 'Home'])->name('home');

});
