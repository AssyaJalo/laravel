<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;
use App\Models\Formation;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apprenants', [ApprenantController::class, 'listeApprenant']);
Route::get('/formations', [FormationController::class, 'listeFormation']);
