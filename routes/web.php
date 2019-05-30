<?php

//esta ruta carga el formulario
Route::get('/genres/create', 'GenreController@create');
//esta ruta lo guarda
Route::post('/crearGenero', 'GenreController@save');

Route::get('/genres/{id}', 'GenreController@oneGenre');
Route::get('/genres', 'GenreController@index');




Route::get('/movies/create', 'MovieController@create');
Route::get('/movies', 'MovieController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () { return view('welcome'); });

// Route::get('/sumar/{num1}/{num2}','CalculadoraController@sumar');
// Route::get('/restar/{num1}/{num2}','CalculadoraController@restar');
