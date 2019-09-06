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

route::get('/work','WorksController@index');
route::get('/work/create','WorksController@create');
route::get('/work/{work}','WorksController@show');


route::get('/detail','DetailWorksController@index');
route::get('/detail/{DetailWork}','DetailWorksController@showto');

