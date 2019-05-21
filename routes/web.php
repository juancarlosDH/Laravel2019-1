<?php

Route::get('/peliculas/{titulo}', function($titulo){
  $peliculas = [
   ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
   ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
   ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
   ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
   ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
   ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
   ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
   ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
   ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
   ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
   ];
   $noExiste = true;
  foreach ($peliculas as $pelicula) {
    if($pelicula['title'] == $titulo){
      echo $pelicula['title'];
      $noExiste = false;
    }
  }
  if($noExiste){
    echo 'No se encuentra la Peli';
  }


});

Route::get('/peliculas', function(){
  $peliculas = [
 ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
 ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
 ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
 ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
 ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
 ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
 ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
 ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
 ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
 ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
 ];

  echo '<ul>';
   foreach ($peliculas as $pelicula) {
      echo "<li><a href='/peliculas/{$pelicula['title']}'>{$pelicula['title']}</a>
        <img src='{$pelicula['poster']}'>
      </li>";
  }
  echo '</ul>';


});

Route::get('/multiplica/{uno}/{dos}/resultado', function($uno, $dos){
  return $uno * $dos;
});

Route::get('/hola/{alguien?}', function($cosa='Invitado'){
    echo 'Hola A Todos soy '.$cosa.' Estoy programando en Laravel';
});

Route::get('/contacto', function(){
  echo '<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="/css/estilos.css">
    </head>
    <body>
      <h1>Hellosss</h1>
      <img src="/images/logo_dh.png" alt="">
      <div class="">
      el Div
      </div>
      <form class="" action="index.html" method="post">
      En form
      </form>
    </body>
  </html>
  ';
});

Route::get('/generos', function(){
  echo '<style>
    img{
      width: 50px;
    }
  </style>';
  $generos = ['Accion', 'Drama'];

  foreach ($generos as $genero) {
    echo $genero;
  }

});

Route::get('/', function () {
    return view('welcome');
});
