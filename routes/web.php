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

// Route::get('/', function () {
//     return view('template');
// });
Route::get('/', 'PagesController@index')->name('index');
Route::get('/home','PagesController@inicio')->name('home');
Route::get('/atractivo','AtrativoController@dentro')->name('dentro');
Route::get('/atractivos','AtrativoController@fuera')->name('fuera');
Route::get('/servicios','AtrativoController@servicios')->name('servicios');
Route::get('/multimedia','AtrativoController@multimedia')->name('multimedia');
Route::get('/transporte','AtrativoController@transporte')->name('transporte');
Route::get('/alojamiento','AtrativoController@alojamiento')->name('alojamiento');
Route::get('/restaurante','AtrativoController@restaurante')->name('restaurante');
Route::get('/telefonos', function () {
     return view('pages.telefono');
})->name('telefono');
Route::get('/detalle/{id}','AtrativoController@detalle')->name('detalle');
Route::get('/detalle/map/{id}','AtrativoController@map')->name('map');
Route::get('/mapa','AtrativoController@maps')->name('mapa');


//Route::get('detalle/','AtrativoController@maps')->name('mapa');

//Route::get('/quehacer','PagesController@index')->name('atractivos');
//|Route::get('/plan_viaje','PagesController@index')->name('atractivos');
//Route::get('/servicios','PagesController@index')->name('atractivos');

