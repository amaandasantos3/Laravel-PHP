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

Route::get('/' , 'AnuncioContoller@index', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/user/home', 'AnuncioContoller@index')->name('anuncio.home');


Route::get('/anuncio/{id}', 'AnuncioContoller@edit')->name('anuncio.edit');

Route::post('/user/cad', 'AnuncioContoller@store')->name('cadastro.anuncio');

Route::post('/{id}', 'AnuncioContoller@update');

Route::delete('/{id}', 'AnuncioContoller@destroy');

Route::get('/visualizar/{id}', 'AnuncioContoller@show')->name('ver.anuncios');

Route::post('deletar/{id}', 'AnuncioContoller@destroy')->name('deletar.anuncio');

Route::get('/googlemap/{id}/{cidade}', ['uses' => 'AnuncioContoller@map', 'as' => 'googlemaps']);

Route::get('/googlemap/direction', 'MapController@direction');