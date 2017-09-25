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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [
    'uses' => 'Auth\LoginController@logout'
]);

Route::post('login', [
    'uses' => 'Auth\LoginController@login'
]);

Route::get('dashboard', function () {
    return view('admin.index');
});

Route::get('gallery', function () {
    return view('gallery');
});


Route::get('who-we-are', function () {
    return view('who-we-are');
});

Route::get('vision', function () {
    return view('vision-mission');
});

Route::get('team', function () {
    return view('team');
});
