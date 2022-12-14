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
	Route::view('partida-inds', 'livewire.partida-inds.index');
	Route::view('partida-equs', 'livewire.partida-equs.index');
	Route::view('horarios', 'livewire.horarios.index');
	Route::view('equipos', 'livewire.equipos.index');
	Route::view('aulas', 'livewire.aulas.index');
	Route::view('jugadors', 'livewire.jugadors.index');
	Route::view('juegos', 'livewire.juegos.index');
	Route::view('categorias', 'livewire.categorias.index');