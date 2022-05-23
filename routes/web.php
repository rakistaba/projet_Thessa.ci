<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjouPrestaController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\PageClientController;
use App\Http\Controllers\PrestataireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\TableauController;
use App\Http\Controllers\VoirProfileController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriClientController;
use App\Http\Controllers\InscriPrestaController;
use App\Http\Controllers\PostulantController;


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

Route::get('/', [IndexController::class, 'index']);

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/ajoupresta', [AjouPrestaController::class, 'ajoupresta'])->name('ajoupresta');

Route::get('/changepass', [ChangePassController::class, 'changepass'])->name('changepass');

Route::get('/client', [PageClientController::class, 'pageclient'])->name('client');
Route::post('/client_destroy/{client}', [PageClientController::class,'destroy'])->name('client_destroy');
Route::post('/client_def_destroy/{client}', [PageClientController::class,'forceDestroy'])->name('client_force_destroy');
Route::post('/client_restore/{client}', [PageClientController::class,'restore'])->name('client_restore');

Route::get('/prestataire', [PrestataireController::class, 'prestataire'])->name('prestataire');
Route::post('/prestataire_destroy/{prest}', [PrestataireController::class,'destroy'])->name('prestataire_destroy');
Route::post('/prestataire_def_destroy/{prest}', [PrestataireController::class,'forceDestroy'])->name('prestataire_force_destroy');
Route::post('/prestataire_restore/{prest}', [PrestataireController::class,'restore'])->name('prestataire_restore');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/selection', [SelectionController::class, 'selection'])->name('selection');
Route::post('/selection/{prest}', [SelectionController::class, 'selection'])->name('selection_add');

Route::get('/tableau', [TableauController::class, 'tableau'])->name('tableau');
Route::post('/tableau/{prest}', [TableauController::class, 'tableau'])->name('tableau_add');


Route::get('/voirprofile/{prest}', [VoirProfileController::class, 'voirprofile'])->name('voirprofile_view');

Route::get('/connexion', [ConnexionController::class, 'connexion'])->name('connexion');

Route::get('/inscriptionclient', [InscriClientController::class, 'inscriclient'])->name('inscriptionclient');
Route::post('/inscriptionclient', [InscriClientController::class, 'submit'])->name('inscriptionclient.submit');

Route::get('/inscriptionpresta', [InscriPrestaController::class, 'inscripresta'])->name('inscriptionpresta');
Route::post('/inscriptionpresta', [InscriPrestaController::class, 'submit'])->name('inscriptionpresta.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/postulant', [PostulantController::class, 'postulant'])->name('postulant');
Route::post('/postulant_restore/{prest}', [PostulantController::class,'restore'])->name('postulant_restore');


