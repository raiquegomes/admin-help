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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //CORTES
    Route::get('/functions/cortes', function () {
        return view('functions/show');
    })->name('cortes');

    Route::get('/registros/pef', function () {
        return view('registros/show');
    })->name('cortesview');

    Route::get('/auth_section', function () {
        return view('section/auth_section');
    })->name('auth_section');

    Route::get('/functions/products', function () {
        return view('services/products/show');
    })->name('losses_product');

    //ATIVIDADES
    Route::get('/task/setores', function () {
        return view('section/show');
    })->name('tasks');

    //TICKETS
    Route::get('/tickets/chamado', function () {
        return view('tickets/show');
    })->name('chamado');


    //REGISTROS DE PRODUTOS PROXIMO DA VALIDADE
    Route::get('/registros/validate', function () {
        return view('products/show');
    })->name('productsVal');

    Route::get('/registros/nfe', function () {
        return view('NFe/show');
    })->name('nfe');

    //CALCULADORA
    Route::get('/calculator/ean', function () {
        return view('ean/show');
    })->name('calculatorEAN');
});
