<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('logs',[SiteController::class, 'logs']);







Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function() {
        return view('/dashboard');
    });
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('/animes', [AnimeController::class, 'index']);
    Route::get('/edit/{animes}', [AnimeController::class, 'edit']);
    Route::get('/delete/{animes}', [AnimeController::class, 'destroy']);
});
