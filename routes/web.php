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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/les-disciplines', 'Pages/LesDisciplines');
Route::view('/reglementation','Pages.LaFederation');
Route::view('/le-club', 'Pages.LeClub');
Route::view('/infos-pratiques', 'Pages.InfosPratiques');
Route::view('/equipement','Pages.Equipement');
Route::view('/mentions-legales','Pages.MentionsLegales');
Route::view('/nous-rejoindre','Pages.NousRejoindre');
Route::view('/contact','Pages.NousContacter');
Route::view('/les-partenaires','Pages.LesPartenaires');
Route::view('/faq','Pages.FAQ');

// Route vers le BACK OFFICE -----------------------------------
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// Route USER pour modifier le mot de passe -----------------------------------
Route::put('/users/{user}/modifier-mot-de-passe', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword');

// ROUTES MODE RESSOURCE (crée automatiquement les routes de base CRUD)
Route::resource('/user', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('/chiens', App\Http\Controllers\ChienController::class)->middleware('auth');
Route::resource('/faq', App\Http\Controllers\FaqController::class);
Route::resource('/chienuser', App\Http\Controllers\ChienUserController::class)->middleware('auth');

