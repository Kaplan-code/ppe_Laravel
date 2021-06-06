<?php

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
Route::get('/', [App\Http\Controllers\MedicamentController::class, 'index'])->name('products.index');




Route::view('/login','login')->name('login');






Auth::routes();

/**
 *
 * medicaments route
 */
Route::get('/home', [App\Http\Controllers\MedicamentController::class, 'index'])->name('products.index');
Route::get('/home/{slug}',[App\Http\Controllers\MedicamentController::class, 'show'])->name('products.show');
Route::get('/search',[App\Http\Controllers\MedicamentController::class, 'search'])->name('products.search');

/**
 * Route page enregistrement medicament
 */
Route::get('/enregistrement',[App\Http\Controllers\EnregistrementController::class, 'index'])->name('enregistrement.index');
Route::post('/enregistrement/ajouter',[App\Http\Controllers\EnregistrementController::class, 'storage'])->name('enregistrement.storage');
Route::delete('/enregistrement/{id}',[App\Http\Controllers\EnregistrementController::class, 'destroy'])->name('enregistrement.destroy');

/**
 * Route medecin
 */
Route::get('/medecins',[App\Http\Controllers\MedecinController::class, 'index'])->name('medecins.index');

/**
 * Route users
 */
Route::get('/utilisateurs',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/utilisateurs/ajouter',[App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::post('/utilisateurs/ajout',[App\Http\Controllers\UserController::class, 'store'])->name('users.store');
