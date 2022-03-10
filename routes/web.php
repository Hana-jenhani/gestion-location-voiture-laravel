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

Route::get('/','ClientsController@index')->name('index');


Route::get('/Clients','ClientsController@create')->name('client.create');
Route::post('/Clients','ClientsController@store')->name('client.store');

Route::delete('/Clients','ClientsController@destroy')->name('client.destroy');


Route::get('/Clients/{client}','ClientsController@edit')->name('client.edit');
Route::post('/Clients/{client}','ClientsController@update')->name('client.update');

Route::get('listevoiture', function () {  return view('listevoiture');})->name('listevoiture');
Route::get('listeclient', function () {  return view('listeclient');})->name('listeclient');
Route::get('ajouutvoiture', function () {  return view('createvoiture');})->name('createvoiture');



Route::get('/listevoiture', 'VoituresController@index')->name('listevoiture');


Route::get('/voitures','VoituresController@create')->name('voiture.createvoiture');
Route::post('/voitures','VoituresController@store')->name('voiture.store');




Route::get('/voitures/{voiture}','VoituresController@edit')->name('voiture.editvoiture');
Route::post('/voitures/{voiture}','VoituresController@update')->name('voiture.update');


Route::delete('/voituress','VoituresController@destroy')->name('voiture.destroy');