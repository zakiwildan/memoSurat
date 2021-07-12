<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

    //Home
    Route::get('Home', [HomeController::class, 'Home'])->name('home');

    //Logout
    Route::get('/Logout', [AuthController::class, 'Logout'])->name('logout');

    //Admin
    Route::get('TambahUser', [AdminController::class, 'TambahUser'])->name('tambahuser');
    Route::get('DaftarUser', [AdminController::class, 'DaftarUser'])->name('daftaruser');

    //User
    Route::get('BuatMemo', [UserController::class, 'BuatMemo'])->name('buatmemo');
});
