<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\AncienController;
use App\Http\Controllers\ChatController;
 
 

// Routes GET simples
Route::get('/',[AncienController::class, 'index'])->name('index');
Route::get('/indexa',[AncienController::class, 'indexa'])->name('indexa');
Route::get('/emploi',[AncienController::class, 'emploi'])->name('emploi');

Route::get('/log_sig',[AncienController::class, 'login'])->name('log_sig');

Route::get('/insccon',[AncienController::class, 'insccon'])->name('insccon');

Route::get('/admin',[AncienController::class, 'admin'])->name('admin');

 
Route::get('/profil', [AncienController::class, 'showProfil'])->middleware('auth')->name('profil');

Route::get('/question0',[AncienController::class, 'question'])->name('question0');

Route::get('/etudiant',[AncienController::class, 'listeEtudiant'])->name('ListeEtudiant');

Route::get('/entreprise',[AncienController::class, 'listeEntreprise'])->name('ListeEntreprise');

Route::post('/ajouter',[AncienController::class, 'ajouterEtudiant']);  

Route::get('/chat',[AncienController::class, 'chat'])->name('chat');
 
Route::get('/temoignage',[AncienController::class, 'temoignage'])->name('temoignage');

Route::get('/profilutilisateur',[AncienController::class, 'profilutilisateur'])->name('profilutilisateur');

// Route pour le traitement d'ajout
Route::post('/ajouter', [AncienController::class, 'ajouterEtudiant'])->name('ancien.ajouter');
Route::post('/ajouter/question', [AncienController::class, 'ajouterEtudiantQuestion'])->name('ancien.ajouter.question');
Route::post('/ajouter/entreprise', [AncienController::class, 'ajouterEntreprise'])->name('entreprise');
// Ajoutez cette route
Route::get('/login', [AncienController::class, 'login'])->name('login');
Route::get('/login', [AncienController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AncienController::class, 'login'])->name('login.post');

 
//Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
 
 