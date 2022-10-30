<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\FormationController;

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
    return view('accueil');
})->name('accueil');


Route::get('recrutement', [RecrutementController::class, 'index'])->name('actionRecrutement');
Route::get('simulationrecrutement', [RecrutementController::class, 'create']) ->name('simulationRecrutement');
Route::get('recrutementresult', [RecrutementController::class, 'storeGlobale']) ->name('resultatRecrutement');


Route::get('formation', [FormationController::class, 'index'])->name('actionFormation');
Route::get('simulationformation', [FormationController::class, 'create']) ->name('simulationFormation');
Route::get('formationresult', [FormationController::class, 'store']) ->name('resultatFormation');


//  Route::get('test', function () {
//      return view('test');
//  })->name('test');

//  Route::get('testControle', [RecrutementController::class, 'test'])->name('testController');



//  ------------------------- Arabe Route ----------------------------------------

Route::get('/Ar', function () {
    return view('accueilAr');
})->name('accueilAr');

Route::get('formationAr', [FormationController::class, 'indexAr'])->name('actionFormationAr');
Route::get('simulationformationAr', [FormationController::class, 'createAr']) ->name('simulationFormationAr');
Route::get('formationresultAr', [FormationController::class, 'storeAr']) ->name('resultatFormationAr');


Route::get('RecruAr', [RecrutementController::class, 'indexAr'])->name('actionRecrutementAr');
Route::get('simulationrecrutementAr', [RecrutementController::class, 'createAr']) ->name('simulationRecrutementAr');
Route::get('recrutementresultAr', [RecrutementController::class, 'storeAr']) ->name('resultatRecrutementAr');





Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('testAr', function () {
    return view('testAr');
})->name('testAr');