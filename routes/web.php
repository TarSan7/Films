<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers;

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

Route::get('/main', [UserController::class, 'main']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/registerData', [UserController::class, 'registerData'])->name('register-data');

Route::get('/authorized', [UserController::class, 'authorized'])->name('authorized');
Route::get('/userdata', [UserController::class, 'userdata'])->name('userdata');

Route::get('/about', [UserController::class, 'about']);

Route::get('/comment', [UserController::class, 'comment'])->name('comment');
Route::get('/comment/{id}', [UserController::class, 'commentOne'])->name('commentOne');

Route::post('/comment/data', [UserController::class, 'data']);
Route::post('/comment/user', [UserController::class, 'user']);