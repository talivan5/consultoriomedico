<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth ::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/paciente','PacienteController@index')->name('paciente');

Route::get('/diagnostico','DiagnosticoController@index');
Route::post('/diagnostico','DiagnosticoController@store')->name('diagnostico.store');
//Route::get('/diagnostico', 'DiagnosticoController@create')->name('diagnostico.create');
Route::get('/diagnostico/{id}', 'DiagnosticoController@show');
Route::delete('/diagnostico/{id}', 'DiagnosticoController@destroy')->name('diagnostico.destroy');
Route::put('/diagnostico/{id}', 'DiagnosticoController@update')->name('diagnostico.update');
//Route::get('/diagnostico/{id}/edit', 'DiagnosticoController@edit')->name('diagnostico.edit');
