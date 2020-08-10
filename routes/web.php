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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/mongodb', function () {
    return view('mongodb');
});
// Zapatos
Route::get('/zapatos', 'ZapatosController@index' )->name('zapatos-zapatos');
Route::get('/zapatos/{id}', 'ZapatosController@Show');
Route::post('/zapatos/comment', 'ZapatosController@AddComment')->name('AutosComment');
Route::get('/zapatos/edit/{id}', 'ZapatosController@edit');
Route::post('/zapatos/edit', 'ZapatosController@Update');
Route::get('/zapatos/delete/{id}', 'ZapatosController@Delete');

Route::delete('/zapatos/delete', 'ZapatosController@Remove');




