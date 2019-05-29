<?php

// Route::get('/sumar/{num1}/{num2}','CalculadoraController@sumar');
// Route::get('/restar/{num1}/{num2}','CalculadoraController@restar');

Route::get('/genres/{id}', 'GenreController@oneGenre');
Route::get('/genres', 'GenreController@index');

// Route::get('/movies/create', 'MovieController@create');
// Route::get('/movies', 'MovieController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () { return view('welcome'); });
