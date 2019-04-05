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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('playgrounds')->group(function(){
    Route::get('/first','PlaygroundController@play_first_ground')->name('firstpage');
    Route::get('/second','PlaygroundController@play_second_ground')->name('secondpage');
});
