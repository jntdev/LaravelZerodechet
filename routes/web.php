<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/accueil', [PostController::class, 'index']);
Route::get('/actualites', [PostController::class, 'actu']);
Route::get('/ledefi', [PostController::class, 'ledefi']);
Route::get('/astuces&ressources', [PostController::class, 'astuces']);
Route::get('/demarchezerodechet', [PostController::class, 'rappelzerodechet']);
Route::get('/cartecommercants', [PostController::class, 'cartecommercants']);
Route::get('/lamaison', [PostController::class, 'ressources']);
Route::get('/produitsmenagers', [PostController::class, 'produitsmenagers']);
Route::get('/pourallerplusloins', [PostController::class, 'biblio']);
Route::get('/lacuisine', [PostController::class, 'cuisine']);
Route::get('/lasalledebain', [PostController::class, 'salledebain']);
Route::get('/lebureau', [PostController::class, 'bureau']);
Route::get('/lesenfants', [PostController::class, 'enfants']);
Route::get('/quisommesnous', [PostController::class, 'quisommesnous']);
Route::get('/contact', [PostController::class, 'contact']);
