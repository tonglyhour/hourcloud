<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/',[MovieController::class, 'movie']);
Route::get('/movie',[MovieController::class, 'movie']);
Route::get('/movie/{id}',[MovieController::class, 'confirmTicket']);
Route::get('/cinema',[MovieController::class, 'cinema']);
Route::get('/contact',[MovieController::class, 'contact']);
Route::post('/contact',[MovieController::class, 'saveContact']);
Route::get('/ticket/{id}',[MovieController::class, 'orderTicket']) ->middleware('isLoggedIn');

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser']) ->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']) ->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class,'logout']);


