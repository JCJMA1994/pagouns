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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/preguntas', function () {
    return view('preguntas');
})->name('preguntas');

Route::get('/tramites', function () {
    return view('tramites');
})->name('tramites');
Route::get('/pago', function () {
    return view('stripe');
})->name('stripe');

Auth::routes();

Route::resource('/shopping', 'CodigoPagoController');
