<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Routes vers l'accueil
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route vers le BACK OFFICE -----------------------------------
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

// Route USER pour modifier le mot de passe -----------------------------------
Route::put('/user/modif-password/{user}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword');

// ROUTES MODE RESSOURCE (crée automatiquement les routes de base CRUD)
Route::resource('/users', App\Http\Controllers\UserController::class);
Route::resource('/chiens', App\Http\Controllers\ChienController::class);

