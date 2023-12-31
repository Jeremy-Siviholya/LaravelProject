<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class, 'index']);
Route::get('about',[HomeController::class, 'about']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('services',[HomeController::class, 'services']);
Route::get('login',[HomeController::class, 'login']);
Route::post('loginpost',[HomeController::class, 'loginpost']);
Route::get('destroyUser/{id}',[HomeController::class, 'destroyUser']);
Route::get('user',[HomeController::class, 'getUser']);
Route::get('data',[HomeController::class, 'test']);

