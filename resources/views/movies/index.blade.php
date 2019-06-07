@extends('layouts.main')

@section('content')

<?php
/*
try{
    //esto muestra los errores con nombres de tablas y campos
    $opt= [\PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //esto codifica para que no tenga errores de acentos
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

    $conex = new \PDO('mysql:host=localhost;dbname=movies_db', 'juancarlos', '123456', $opt);
    //echo '<pre>';
    // var_dump($conex);

}catch(\PDOException $e){
    echo 'No me pude conectar a la BD<br>';
    echo $e->getMessage();
}


  $consultaCantidad = 'SELECT * FROM movies';
    $queryCantidad = $conex->query($consultaCantidad);
    $cantidad = $queryCantidad->rowCount();

    $cantidad = ceil($cantidad / 6);

    $orden = "ORDER BY movies.title";

    if(isset($_GET['orden'])) {
      if($_GET['orden']== 'title'){
        $orden = "ORDER BY movies.title";
      }
     if($_GET['orden']== 'genero'){
        $orden = "ORDER BY genres.name";
      }
      if($_GET['orden']== 'rating'){
         $orden = "ORDER BY movies.rating DESC";
       }
       if($_GET['orden']== 'awards'){
          $orden = "ORDER BY movies.awards DESC";
        }
    }
    $salto = 0;
    if(isset($_GET['pagina'])){
      $salto = ($_GET['pagina']-1)*6;
    }
    //preparo y ejecuto la consulta de las pelis
    $consulta = "SELECT movies.id, movies.title, genres.name AS nombreGenero, movies.rating, movies.awards
     FROM movies
     LEFT JOIN genres ON movies.genre_id = genres.id
      $orden
    LIMIT $salto, 6";

    $query = $conex->prepare($consulta);
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    */
  ?>
       <section class="principal">
           <article class="nuevas" id="peliculas">
               <div class="peliculas">
               <h2 class="titulo-nav">
                 <div >
                   <div>Peliculas en Digital Movies</div>
                   <div>
                     <a href="/movies/create" class="btn btn-primary">Nueva</a>
                   </div>
                 </div>
                 <div class="">
                   <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="peliculas.php?orden=title">Titulo</a></li>
                    <li class="breadcrumb-item"><a href="peliculas.php?orden=genero">Genero</a></li>
                    <li class="breadcrumb-item "><a href="?orden=rating">Rating</a></li>
                    <li class="breadcrumb-item active"><a href="?orden=awards">Awards</a></li>
                  </ol>
                 </div>
                 <nav >
                   {{$peliculas->links()}}
                 </nav>
               </h2>

               <div class="card-group">
                   @foreach ($peliculas as $peli)
                    <div class="card">
                      <img class="card-img-top" src="/storage/{{$peli->poster}}" alt="{{$peli->title}}">
                      <div class="card-body">
                        <h5 class="card-title">{{$peli->title}}</h5>
<p class="card-text">Genero: {{ $peli->dameGenero() }}</p>
                        <p class="card-text">Rating: {{$peli->rating}}</p>
                        <p class="card-text">Awards: {{$peli->awards}}</p>
                        <p class="card-text">
                          <a class="btn btn-primary" href="/movies/{{$peli->id}}">Ver Mas</a>
      <a class="btn btn-success" href="/movies/edit/{{$peli->id}}">Editar</a>
                          </p>
                      </div>
                    </div>
                  @endforeach
              </div>


               </div>
           </article>
       </section>

@endsection
