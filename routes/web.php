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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::get('/','HomeController@index');
route::get('/about','HomeController@about');

route::get('/detail','DetailWorksController@index');
route::get('/detail/{DetailWork}','DetailWorksController@showto');
route::get('/detail/{DetailWork}/create','DetailWorksController@create');
route::post('/detail','DetailWorksController@store');

route::get('/work','WorksController@index');
route::get('/work/create','WorksController@create');
route::get('/work/{work}','WorksController@show');
route::post('/work','WorksController@store');
route::delete('/work/{work}','WorksController@destroy');
route::get('/work/{work}/edit','WorksController@edit');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
