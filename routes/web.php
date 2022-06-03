<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AdminController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteGroup;
=======
use App\Http\Controllers\LoginController;
>>>>>>> 071adcf73b44cfabdfb782acf4f8f5c183b7c900

// use App\Http\Controllers\Auth;
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

Route::redirect("/","/home");

Route::get('/home', [FilmController::class, 'home']);

Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth');
Route::get('/create', [AdminController::class, 'create'])->middleware('auth');
Route::post('/hasilcreate', [FilmController::class, 'create'])->middleware('auth');
Route::get('/mypost', [FilmController::class, 'show'])->middleware('auth');
Route::get('/dataAdmin', [AdminController::class, 'dataAdmin'])->name('dataAdmin')->middleware('auth');
Route::get('/adminfeedback', [AdminController::class, 'feedback'])->middleware('auth');
Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::patch('/update/{id}', [FilmController::class, 'update'])->middleware('auth');
Route::delete('/delete/{id}', [FilmController::class, 'delete'])->middleware('auth');




Route::get('/login', [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginInput', [AdminController::class, 'loginInput']);

Route::get('/register', [AdminController::class, 'register'])->middleware('auth');
Route::post('/login', [AdminController::class, 'registerInput'])->name('registerInput')->middleware('guest');

Route::get('/feedback', [FilmController::class, 'inputfeedback']);
Route::post('/inputanfeedback', [FilmController::class, 'feedback']);
Route::get('/movies', [FilmController::class, 'movies']);
Route::get('/anime', [FilmController::class, 'animes']);
<<<<<<< HEAD
Route::get('/Genre/{genre:nama}', [FilmController::class, 'genre']);

Route::get('/{film:slug}', [FilmController::class, 'nonton']);
Route::get('/edit/{film:id}', [FilmController::class, 'edit']);

=======

Route::get('/nonton/{film:slug}', [FilmController::class, 'nonton']);

Route::get('/edit/{film:id}', [FilmController::class, 'edit']);

Route::patch('/update/{id}', [FilmController::class, 'update']);

Route::delete('/delete/{id}', [FilmController::class, 'delete']);

Route::get('/Genre/{genre:nama}', [FilmController::class, 'genre']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
>>>>>>> 071adcf73b44cfabdfb782acf4f8f5c183b7c900




