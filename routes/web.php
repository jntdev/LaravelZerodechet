<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaptnController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\VitrineController;

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

//** Route Vitrine */
Route::get('/', [VitrineController::class, 'index']);
Route::get('/accueil', [VitrineController::class, 'index']);
Route::get('/actualites', [VitrineController::class, 'actu']);
Route::get('/ledefi', [VitrineController::class, 'ledefi']);
Route::get('/astuces&ressources', [VitrineController::class, 'astuces']);
Route::get('/demarchezerodechet', [VitrineController::class, 'rappelzerodechet']);
Route::get('/cartecommercants', [VitrineController::class, 'cartecommercants']);
Route::get('/lamaison', [VitrineController::class, 'ressources']);
Route::get('/produitsmenagers', [VitrineController::class, 'produitsmenagers']);
Route::get('/pourallerplusloins', [VitrineController::class, 'biblio']);
Route::get('/lacuisine', [VitrineController::class, 'cuisine']);
Route::get('/lasalledebain', [VitrineController::class, 'salledebain']);
Route::get('/lebureau', [VitrineController::class, 'bureau']);
Route::get('/lesenfants', [VitrineController::class, 'enfants']);
Route::get('/quisommesnous', [VitrineController::class, 'quisommesnous']);
Route::get('/contact', [VitrineController::class, 'contact']);


/** Comportment non logged*/
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/** Comportment logged*/
Route::group([
    'middleware'=>[
        'auth',
        'PreventBackHistory']],function(){

    /** Route Profile*/
    Route::get('home',[LoggedController::class,'index'])->name('dashboard');
    Route::get('profile',[LoggedController::class,'profile'])->name('profile');
    Route::post('user_delete',[LoggedController::class,'delete'])->name('user_delete');
    Route::get('settings',[LoggedController::class,'settings'])->name('settings');


    /** Route Event */
    Route::get('/event_index/', [EventController::class, 'index'])->name('event_list');
    Route::get('/event_manage/', [EventController::class, 'manage'])->name('manage');
    Route::get('/event_show/{event}', [EventController::class, 'show'])->name('event_show');
    Route::get('/event_create/', [EventController::class, 'create'])->name('event_create');
    Route::get('/event_edit/{id}', [EventController::class, 'edit'])->name('event_edit');
    Route::get('/event_delete/{id}', [EventController::class, 'delete'])->name('event_delete');

    Route::post('/event_store/', [EventController::class, 'store'])->name('event_store');



    Route::get('/tableaudebord/events', [EventController::class, 'index']);

});
