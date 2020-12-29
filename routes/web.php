<?php

use App\Http\Controllers\FichierController;
use App\Http\Controllers\MatiereController;
use App\Models\Fichier;
use App\Models\Matiere;
use Illuminate\Support\Facades\Auth;
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

Route::get('/cours', function () {
    $matieres = Matiere::all();
    $fichiers = Fichier::all();
    return view('cours',compact('matieres','fichiers'));
});

Route::get('/profil', function () {
    return view('profil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('matiere', MatiereController::class);
Route::resource('fichier', FichierController::class);
