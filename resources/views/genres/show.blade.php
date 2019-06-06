{{$genero->name}}

<div class="">
  Peliculas: <br/>
@foreach ($genero->movies as $movie)
  {{$movie->title}} <br/>
@endforeach

</div>
