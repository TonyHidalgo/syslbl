<?php

use App\Http\Controllers\StudentController;
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    //ESTUDIANTES
    Route::get('estudiantes', 'StudentController@index')->name('estudiantes.index')->middleware('can:student.index');

    //VER EXPEDIENTE
    Route::get('estudiantes/{student}', 'StudentController@show')->name('estudiantes.show')->middleware('can:student.show');
    Route::get('estudiantes/ficha/{student}', 'StudentController@ficha')->name('estudiantes.ficha')->middleware('can:student.index');

    //REGISTRAR ESTUDIANTE
    Route::get('estudiantes/create/{student}', 'StudentController@create')->name('estudiantes.create')->middleware('can:student.create');
    Route::post('estudiantes/store', 'StudentController@store')->name('estudiantes.store')->middleware('can:student.create');

    //INSCRIBIR ESTUDIANTE
    Route::get('estudiantes/inscribir/{student}', 'StudentController@inscribir')->name('estudiantes.inscribir')->middleware('can:student.create');
    Route::post('estudiantes/inscribe', 'StudentController@inscribe')->name('estudiantes.inscribe')->middleware('can:student.create');


    //PARTE 1
    Route::get('estudiantes/inscribir-1/{student}', 'StudentController@SHOWinscribePart1')->name('estudiantes.inscribir-1')->middleware('can:student.create');
    Route::put('estudiantes/{student}/inscribe-1', 'StudentController@POSTinscribePart1')->name('estudiantes.inscribe-1')->middleware('can:student.create');
    //PARTE 2
    Route::get('estudiantes/inscribir-2/{student}', 'StudentController@SHOWinscribePart2')->name('estudiantes.inscribir-2')->middleware('can:student.create');
    Route::put('estudiantes/{student}/inscribe-2', 'StudentController@POSTinscribePart2')->name('estudiantes.inscribe-2')->middleware('can:student.create');
    //PARTE 3
    Route::get('estudiantes/inscribir-3/{student}', 'StudentController@SHOWinscribePart3')->name('estudiantes.inscribir-3')->middleware('can:student.create');
    Route::put('estudiantes/{student}/inscribe-3', 'StudentController@POSTinscribePart3')->name('estudiantes.inscribe-3')->middleware('can:student.create');
    //PARTE 4
    Route::get('estudiantes/inscribir-4/{student}', 'StudentController@SHOWinscribePart4')->name('estudiantes.inscribir-4')->middleware('can:student.create');
    Route::put('estudiantes/{student}/inscribe-4', 'StudentController@POSTinscribePart4')->name('estudiantes.inscribe-4')->middleware('can:student.create');
    //PARTE 5
    Route::get('estudiantes/inscribir-5/{student}', 'StudentController@SHOWinscribePart5')->name('estudiantes.inscribir-5')->middleware('can:student.create');
    Route::put('estudiantes/{student}/inscribe-5', 'StudentController@POSTinscribePart5')->name('estudiantes.inscribe-5')->middleware('can:student.create');

    //ACTUALIZAR ESTUDIANTE
    Route::get('estudiantes/{student}/edit', 'StudentController@edit')->name('estudiantes.edit')->middleware('can:student.edit');
    Route::put('estudiantes/{student}', 'StudentController@update')->name('estudiantes.update')->middleware('can:student.edit');

    //TOMAR FOTOS
    Route::get('estudiantes/faltantes/foto', 'StudentController@lista_foto')->name('estudiantes.lista_foto')->middleware('can:student.edit');
    Route::put('estudiantes/{student}/foto', 'StudentController@tomar_foto')->name('estudiantes.tomar_foto')->middleware('can:student.edit');

    //ELIMINAR ESTUDIANTE
    Route::delete('estudiantes/{student}', 'StudentController@destroy')->name('estudiantes.destroy')->middleware('can:student.destroy');



});
