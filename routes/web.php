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


Route::get('/examenes','ExamenController@index')->name('examenes.index');
Route::get('/examenes/create','ExamenController@create')->name('examenes.create');
Route::post('/examenes','ExamenController@store')->name('examenes.store');
Route::get('/preguntas/create','PreguntaController@create')->name('preguntas.create');
Route::post('/preguntas/store','PreguntaController@store')->name('preguntas.store');
Route::get('/examenes/{examen}','ExamenController@show')->name('examenes.show');