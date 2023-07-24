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

Route::view('/les-disciplines', 'PageLesDisciplines');
Route::view('/reglementation','PageLaFederation');
Route::view('/infos-pratiques', 'PageInfosPratiques');
Route::view('/equipement','PageEquipement');
Route::view('/mentions-legales','PageMentionsLegales');
Route::view('/nous-rejoindre','PageNousRejoindre');
Route::view('/contact','PageNousContacter');
Route::view('/les-partenaires','PageLesPartenaires');

// Route vers la page LE CLUB avec affichage dynamique des membres du Bureau
Route::get('/le-club', [App\Http\Controllers\BureauMembreController::class, 'index']);
// Route vers la page FAQ avec affichage dynamique des Q/R
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index']);

// Route vers le BACK OFFICE -----------------------------------
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// ROUTES MODE RESSOURCE (crée automatiquement les routes de base CRUD)
Route::resource('/user', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('/faq', App\Http\Controllers\FaqController::class);
Route::resource('/bureaumembre', App\Http\Controllers\BureauMembreController::class)->except(['create', 'show', 'store', 'destroy']);