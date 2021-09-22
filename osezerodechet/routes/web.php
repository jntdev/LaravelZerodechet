<?php

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
Route::get('/accueil', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/actualites', function () {
    return view('actu');
});

Route::get('/ledefi', function () {
    return view('ledefi');
});

Route::get('/astuces&ressources', function () {
    return view('astuces');
});

Route::get('/quisommesnous', function () {
    return view('quisommesnous');
});

Route::get('/contact', function () {
    return view('contact');
});