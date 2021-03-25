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
Route::get('/', function () {
    return view('welcome');
});
Route::view('contact','contact');


Route::view('login','login');






Auth::routes();

/**
 *
 * medicaments route
 */
Route::get('/home', [App\Http\Controllers\MedicamentController::class, 'index'])->name('products.index');
Route::get('/home/{slug}',[App\Http\Controllers\MedicamentController::class, 'show'])->name('products.show');

/**
 * Route page enregistrement medicament
 */
Route::post('/recap/ajouter',[App\Http\Controllers\RecordController::class, 'storage'])->name('record.storage');
