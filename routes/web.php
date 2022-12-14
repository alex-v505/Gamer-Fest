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
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

//Route Hooks - Do not delete//
	Route::view('juegos', 'livewire.juegos.index');
	Route::view('aulas', 'livewire.aulas.index');
	Route::view('inscripcion-equs', 'livewire.inscripcion-equs.index');
	Route::view('inscripcion-inds', 'livewire.inscripcion-inds.index');
	Route::view('categorias', 'livewire.categorias.index');