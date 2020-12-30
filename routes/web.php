<?php

use App\Http\Controllers\FichierController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfilController;
use App\Models\Fichier;
use App\Models\Matiere;
use App\Models\MatiereUser;
use App\Models\User;
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
    $test = MatiereUser::all();
    // dd($test->user);
    $matieres = Matiere::all();
    $fichiers = Fichier::all();
    $user = User::find(Auth::user());
    return view('cours',compact('matieres','fichiers','user'));
})->middleware('AccessUser');

Route::get('/mesCours', function () {
    $matieres = Auth::user()->matieres;
    $fichiers = Fichier::all();
    return view('mesCours',compact('matieres','fichiers'));
})->middleware('AccessUser');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('AccessMiddleware');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/download/{id}',[MatiereController::class,'download']);
Route::resource('matiere', MatiereController::class);
Route::resource('fichier', FichierController::class);
Route::post('/editPicture/{id}', [ProfilController::class, 'editPicture']);
Route::post('/addMatiere/{id}', [ProfilController::class, 'addMatiere']);
Route::post('/detachMatiere/{id}', [ProfilController::class, 'detachMatiere']);
Route::resource('profil', ProfilController::class)->middleware('AccessUser');
