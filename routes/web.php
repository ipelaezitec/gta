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

Route::get('/','HomeController@index')->name('home');
Route::get('/contact','ContactController@index')->name('contact');
//Route::get('/home','HomeController@index')
Route::get('/application','ApplicationController@index')->name('app');
Route::post('/application/createapp','ApplicationController@createApp')->name('appcreate');



// panel
Route::get('/panel','PanelController@index')->name('panel');

// panel /custom
Route::get('/panel/custom','CustomController@index')->name('custom');
Route::post('/panel/custom/store','CustomController@store')->name('store');
// panel / app received
Route::get('/panel/appreceived','AppReceivedController@showAppsReceived');
Route::get('/panel/appreceived/{id}','AppReceivedController@showSingleApp')->name('appreceivedview');

//panel / user
Route::get('/panel/users','UserController@showUsers')->name('users');
Route::get('/panel/user/{id}','UserController@showUser')->name('user');
Route::get('/panel/user/delete/{id}','UserController@deleteUser')->name('deleteuser');
    
    
    // Route::get('/panel','PanelController@index');
//Example Route::get('/user/show/{id}','UserController@show');
