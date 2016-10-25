<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.login');
});
Route::get('/admin','adminController@showadminPage');

Route::get('/about','aboutController@showAboutPage');
Route::get('/codes','CodeController@showcodePage');
Route::get('/contact','ContactController@showContactPage');
Route::get('/projects','ProjectController@showProjectPage');
Route::get('/services','ServicesController@showServicesPage');
Route::get('/index','indexController@showindexPage');
Route::get('/home','HomeController@showhomePage');

Auth::routes();

Route::get('/home', 'HomeController@index');
