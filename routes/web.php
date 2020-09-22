<?php

use Illuminate\Support\Facades\Route;


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
