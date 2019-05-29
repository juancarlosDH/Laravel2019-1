@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form class="" action="" method="get">
               <input type="text" name="name" value="" class="form-control">
               <button type="submit" class="btn btn-primary">Buscar</button>
             </form>


  @foreach ($actores as $actor)
    <a href="/genres/{{$genero->id}}">{{ $actor->first_name }}</a><br>
  @endforeach

@endsection
