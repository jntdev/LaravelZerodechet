<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vitrineController;
use App\Http\Controllers\eventsController;

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

// Route::get('/accueil', function () {
//     return view('index');
// });

Route::get('/', [vitrineController::class, 'index']);
Route::get('/accueil', [vitrineController::class, 'index']);
Route::get('/actualites', [vitrineController::class, 'actu']);
Route::get('/ledefi', [vitrineController::class, 'ledefi']);
Route::get('/astuces&ressources', [vitrineController::class, 'astuces']);
Route::get('/demarchezerodechet', [vitrineController::class, 'rappelzerodechet']);
Route::get('/cartecommercants', [vitrineController::class, 'cartecommercants']);
Route::get('/lamaison', [vitrineController::class, 'ressources']);
Route::get('/produitsmenagers', [vitrineController::class, 'produitsmenagers']);
Route::get('/pourallerplusloins', [vitrineController::class, 'biblio']);
Route::get('/lacuisine', [vitrineController::class, 'cuisine']);
Route::get('/lasalledebain', [vitrineController::class, 'salledebain']);
Route::get('/lebureau', [vitrineController::class, 'bureau']);
Route::get('/lesenfants', [vitrineController::class, 'enfants']);
Route::get('/quisommesnous', [vitrineController::class, 'quisommesnous']);
Route::get('/contact', [vitrineController::class, 'contact']);

Route::get('/tableaudebord', [eventsController::class, 'tableaudebord']);
Route::get('/tableaudebord/{id}', [eventsController::class, 'event_vue'])->name('tableaudebord.event_vue');
Route::get('/event_create/', [eventsController::class, 'event_create'])->name('event_create');
Route::post('/event_create/', [eventsController::class, 'event_store'])->name('event_store');
Route::get('/succes_create_event/', [eventsController::class, 'event_store'])->name('success_create_event');
