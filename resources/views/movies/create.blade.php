@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form method="post" action="">
               <h2>Nueva Pelicula</h2>
               <div class="form-row">
                <div  class="form-group col-md-4">
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text" name="title" id="title"/>
                </div>
                <div  class="form-group col-md-4">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="text" name="rating" id="rating"/>
                </div>
                <div  class="form-group col-md-4">
                    <label for="premios">Premios</label>
                    <input class="form-control" type="text" name="awards" id="awards"/>
                </div>
                <div  class="form-group col-md-4">
                    <label for="length">Duracion</label>
                    <input class="form-control" type="text" name="length" id="length"/>
                </div>

                <div  class="form-group col-md-4">
                    <label for="duracion">Extreno</label>
                    <input class="form-control" type="date" name="release_date" id="release_date"/>
                </div>

                <div  class="form-group col-md-4">
                    <label for="genre">Genero</label>
                    <select class="form-control" name="genre_id">
                      @foreach ($generos as $genero)
                      <option value="{{$genero->id}}"> {{$genero->name}} </option>
                      @endforeach
                    </select>
                </div>
                </div>
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>

            </form>
          </div>
      </article>
  </section>

@endsection
