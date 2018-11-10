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
//     return view('welcome');
// });

Auth::routes();

Route::get('/','HomeController@index');
Route::get('/application','ApplicationController@index');



// panel
Route::get('/panel','PanelController@index')->name('panel');

// panel /custom
Route::get('/panel/custom','CustomController@index')->name('custom');
Route::post('/panel/custom/store','CustomController@store')->name('store');
// panel / app received
Route::get('/panel/appreceived','AppReceivedController@showAppsReceived');
Route::get('/panel/appreceived/{id)','AppReceivedController@showSingleApp');

//panel / user
Route::get('/panel/users','UserController@showUsers');
Route::get('/panel/user/{id}','UserController@showUser')->name('user');
    
    
    // Route::get('/panel','PanelController@index');
//Example Route::get('/user/show/{id}','UserController@show');
