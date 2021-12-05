<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaptnController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FromAdminController;
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
    Route::get('user_delete',[LoggedController::class,'delete'])->name('user_delete');
    Route::post('user_update',[LoggedController::class,'update'])->name('user_update');

    /** Route Admin*/
    Route::get('all_user',[FromAdminController::class,'all_user'])->name('all_user');
    Route::get('profile_FromAdmin',[FromAdminController::class,'show'])->name('profile_FromAdmin');
    Route::post('profile_FromAdmin_update',[FromAdminController::class,'update'])->name('update_profile');
    Route::post('profile_FromAdmin_delete',[FromAdminController::class,'delete'])->name('delete_profile');

    /** Route Event */
    Route::get('/event_index/', [EventController::class, 'index'])->name('event_list');
    Route::get('/event_manage/', [EventController::class, 'manage'])->name('manage');
    Route::get('/registered/', [EventController::class, 'registered'])->name('registered');
    Route::get('/event_show/{event_id}', [EventController::class, 'show'])->name('event_show');
    Route::get('/event_create/', [EventController::class, 'create'])->name('event_create');
    Route::get('/event_edit/{id}', [EventController::class, 'edit'])->name('event_edit');
    Route::get('/event_delete/{id}', [EventController::class, 'delete'])->name('event_delete');
    Route::post('/event_store/', [EventController::class, 'store'])->name('event_store');
    Route::get('/event_mailAll/', [EventController::class, 'mailAll'])->name('event_mailAll');
    Route::post('/mailToAllSent/', [EventController::class, 'mailToAllSent'])->name('mailToAllSent');
    Route::get('/registration_list/{id}', [EventController::class, 'view_registrations'])->name('registration_list');
    /** Route Registration*/

    Route::get('/event_registration/{id}', [RegistrationController::class, 'index'])->name('event_registration_view');
    Route::post('/event_registration_submit/', [RegistrationController::class, 'submit'])->name('event_registration_submit');
    Route::post('/event_registration_delete/', [RegistrationController::class, 'delete'])->name('event_registration_delete');
});
