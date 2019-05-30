@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form class="" action="" method="get">
               <input type="text" name="name" value="" class="form-control">
               <button type="submit" class="btn btn-primary">Buscar</button>
             </form>

             <a href="/genres/create" class="btn btn-success">Nuevo Genero</a>

             <div>
  @foreach ($generos as $genero)
    <a href="/genres/{{$genero->id}}">{{ $genero->name }}</a><br>
  @endforeach
            </div>



@endsection
