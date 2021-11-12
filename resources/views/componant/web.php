<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CaptnController;
use App\Http\Controllers\EventController;
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

// Route::get('/accueil', function () {
//     return view('index');
// });

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

// Route::get('/tableaudebord', [EventController::class, 'tableaudebord']);
// Route::get('/tableaudebord/{id}', [EventController::class, 'event_vue'])->name('tableaudebord.event_vue');
// Route::get('/event_create/', [EventController::class, 'event_create'])->name('event_create');
// Route::post('/event_create/', [EventController::class, 'event_store'])->name('event_store');
// Route::get('/succes_create_event/', [EventController::class, 'event_store'])->name('success_create_event');





// Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){
//     Route::get('tableaudebord',[AdminController::class,'index'])->name('tableaudebord');
//     Route::get('profile',[AdminController::class,'profile'])->name('profile');
//     Route::get('settings',[AdminController::class,'settings'])->name('settings');
// });

// Route::group(['prefix'=>'user','middleware'=>['isUser','auth']],function(){
//     Route::get('tableaudebord',[AdminController::class,'index'])->name('tableaudebord');
//     Route::get('profile',[AdminController::class,'profile'])->name('profile');
//     Route::get('settings',[AdminController::class,'settings'])->name('settings');
// });

// Route::group(['prefix'=>'anim','middleware'=>['isAnim','auth']],function(){
//     Route::get('tableaudebord',[AdminController::class,'index'])->name('tableaudebord');
//     Route::get('profile',[AdminController::class,'profile'])->name('profile');
//     Route::get('settings',[AdminController::class,'settings'])->name('settings');
// }); 
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([
    // 'prefix'=>'admin',
    'middleware'=>['isAdmin','auth','PreventBackHistory']],function(){
    // Route::get('../',[AdminController::class,'index'])->name('VitrineController');
    Route::get('home',[AdminController::class,'index'])->name('VitrineController');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('/tableaudebord', [EventController::class, 'tableaudebord']);
    Route::get('/tableaudebord/{id}', [EventController::class, 'event_vue'])->name('tableaudebord.event_vue');
    Route::get('/event_create/', [EventController::class, 'event_create'])->name('event_create');
    Route::post('/event_create/', [EventController::class, 'event_store'])->name('event_store');
    Route::get('/succes_create_event/', [EventController::class, 'event_store'])->name('success_create_event');
});
Route::group([
    // 'prefix'=>'anim',
    'middleware'=>['isAnim','auth','PreventBackHistory']],function(){
    Route::get('home',[AnimController::class,'index'])->name('anim.dashboard');
    Route::get('profile',[AnimController::class,'profile'])->name('anim.profile');
    Route::get('settings',[AnimController::class,'settings'])->name('anim.settings');
    Route::get('/tableaudebord', [EventController::class, 'tableaudebord']);
    Route::get('/tableaudebord/{id}', [EventController::class, 'event_vue'])->name('tableaudebord.event_vue');
    Route::get('/event_create/', [EventController::class, 'event_create'])->name('event_create');
    Route::post('/event_create/', [EventController::class, 'event_store'])->name('event_store');
    Route::get('/succes_create_event/', [EventController::class, 'event_store'])->name('success_create_event');
});

Route::group([
    // 'prefix'=>'user',
    'middleware'=>['isUser','auth','PreventBackHistory']],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    Route::get('/tableaudebord', [EventController::class, 'tableaudebord']);
    Route::get('/tableaudebord/{id}', [EventController::class, 'event_vue'])->name('tableaudebord.event_vue');

});

Route::group([
    // 'prefix'=>'captn',
    'middleware'=>['isCaptn','auth','PreventBackHistory']],function(){
    Route::get('dashboard',[CaptnController::class,'index'])->name('captn.dashboard');
    Route::get('profile',[CaptnController::class,'profile'])->name('captn.profile');
    Route::get('settings',[CaptnController::class,'settings'])->name('captn.settings');
    Route::get('/tableaudebord', [EventController::class, 'tableaudebord']);
    Route::get('/tableaudebord/{id}', [EventController::class, 'event_vue'])->name('tableaudebord.event_vue');

});

