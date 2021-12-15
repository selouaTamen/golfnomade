<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\ListegolffranceController;


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

Route::get('/users', function () {
    return view('welcome');
});

Route::get('/listgolffrance', function () {
    return view('listgolfrance');
});


Route::get('/inscriptions', [InscriptionController::class, 'index'])
    ->name('inscription.index');

Route::get('/connexion', [ConnexionController::class, 'index'])
    ->name('connexion.index');

Route::post('/produits', [ProduitsController::class, 'store'])
    ->name('produits.store');

Route::post('/listegolffrance', [ListegolffranceController::class, 'store'])
    ->name('listegolffrance.store');
