@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">
               <h2>La Pelicula</h2>
               <div class="form-row">
                <div  class="form-group col-md-4">
                    <label for="titulo">Titulo</label>
                    {{$pelicula->title}}

                </div>
                <div  class="form-group col-md-4">
                    <label for="rating">Rating</label>
                    {{$pelicula->rating}}
                </div>
                <div  class="form-group col-md-4">
                    <label for="premios">Premios</label>
                    {{$pelicula->awards}}
                </div>
                <div  class="form-group col-md-4">
                    <label for="length">Duracion</label>
                    {{$pelicula->length}}

                </div>

                <div  class="form-group col-md-4">
                    <label for="duracion">Estreno</label>
                    {{$pelicula->release_date}}

                </div>

                <div  class="form-group col-md-4">
                    <label for="duracion">Genero</label>
                    {{ $pelicula->genre->id }} -
                    {{ $pelicula->genre->name }}
                </div>
                </div>
                <h4>Actores</h4>
                <ul>

                  @foreach ($pelicula->actors as $actor)
                    <li>{{$actor->getFullName()}}</li>
                  @endforeach
                </ul>

                <form class="" action="/movies/{{$pelicula->id}}" method="post">
                  @csrf
                  <label for="">Agregar Actor:</label>
                  <select class="" name="actor_id">
                    @foreach ($actores as $actor)
                      <option value="{{$actor->id}}">{{$actor->getFullName()}}</option>
                    @endforeach
                  </select>
                  <button class="btn btn-primary" type="submit">Agregar</button>
                </form>


          </div>
      </article>
  </section>

@endsection
