<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::redirect('/','/Login');
Route::get('/Login', [ProjectController::class, 'login']);
Route::get('/Register', [ProjectController::class, 'register']);
Route::post('/Register', [ProjectController::class, 'RegisterPg']);
Route::post('/Login', [ProjectController::class, 'LoginPg']);
Route::get('/Accueil',[ ProjectController::class, 'Accueil']);
Route::get('/Accueil/afficherrec',[ ProjectController::class, 'activiteRec'])->name('activiteRec');
Route::get('/Conseil', [ProjectController::class, 'Conseils']);
Route::get('/ajouter-activite', [ProjectController::class, 'afficheractivite']);
Route::post('/ajouter-activite', [ProjectController::class, 'ajouterActivite']);
