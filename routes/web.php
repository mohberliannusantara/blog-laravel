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
  return view('dasboard.index');
});

Route::get('/dasboard', 'Dasboard@index');

Route::get('/blog', 'Blog@index');

Route::get('/blog/create', 'Blog@create');
Route::post('/blogs', 'Blog@store');

Route::get('/blog/{id}', 'Blog@show');

Route::get('/project', 'Project@index');

Route::get('/service', 'Service@index');

Route::get('/about', 'About@index');

Route::get('/contact', 'Contact@index');
