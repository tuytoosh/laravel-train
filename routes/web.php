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
})->name('home');

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
});


//
//
//Route::get('blog', 'BlogController@index');
//
//Route::get('blog/delete/{id}', 'BlogController@delete');

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', 'BlogController@index');

    Route::get('add', 'BlogController@add');
    Route::post('add', 'BlogController@save');

    Route::get('edit/{post}', 'BlogController@edit');
    Route::post('edit/{post}', 'BlogController@update');

    Route::get('delete/{id}', 'BlogController@delete');
});