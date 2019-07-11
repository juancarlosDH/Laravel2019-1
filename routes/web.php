<?php
//consumiendo una API
Route::get('/cursos', 'CursoController@getCursosDH');
Route::get('/comisiones/{curso_id}', 'CursoController@getComisionesDH');

Route::get('/cursos2', 'CursoController@getConGuzzle');
Route::get('/cursos3', 'CursoController@getConCurl');

//para Generos
//esta ruta carga el formulario
Route::get('/genres/create', 'GenreController@create');
//esta ruta lo guarda
Route::post('/genres/create', 'GenreController@save');
Route::get('/genres/{id}', 'GenreController@oneGenre');
Route::get('/genres', 'GenreController@index');

//para peliculas
Route::post('/movies/edit/{id}', 'MovieController@update')->middleware('auth');
Route::get('/movies/edit/{id}', 'MovieController@edit')->middleware('auth');
Route::get('/movies/create', 'MovieController@create')->middleware(['admin', 'auth']);
Route::get('/movies/{id}', 'MovieController@show')->middleware('auth');
Route::post('/movies/{id}', 'MovieController@addActor');
Route::get('/movies', 'MovieController@index');

//mi ruta del home
Route::get('/home', 'HomeController@index')->name('home');

//ruta inicial
Route::get('/', 'MainController@index');

// Route::get('/sumar/{num1}/{num2}','CalculadoraController@sumar');
// Route::get('/restar/{num1}/{num2}','CalculadoraController@restar');

//rutas de autenticacion de Laravel
Auth::routes();

//Usando rutas para autenticarnos con Facebook
Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFB');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFB');







///
