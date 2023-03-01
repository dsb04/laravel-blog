<?php

use lluminate\Support\Facades\Route
use App\Http\Controllers\PostControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;


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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/posts', [PostControler::class,"index"])->name('dashboard')->middleware('auth');
Route::get('posts/create', [PostControler::class,'create']);
Route::post('posts/store', [PostControler::class,'store']);
Route::get('/posts/show/{id}', [PostControler::class, 'show']);
Route::get('/posts/edit/{id}', [PostControler::class, 'edit']);
Route::post('/posts/update/{id}', [PostControler::class, 'update']);
Route::get('/posts/delete/{id}', [PostControler::class, 'destroy']);

