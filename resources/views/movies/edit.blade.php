@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form method="post" action="" enctype="multipart/form-data">
               @csrf
               <h2>Edición de Pelicula</h2>
               <div class="form-row">
                <div  class="form-group col-md-4">
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text" name="title"
                   id="title" value="{{old('title', $pelicula->title)}}">
                   @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div  class="form-group col-md-4">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="text" name="rating" id="rating" value="{{old('rating',$pelicula->rating)}}">
                    @error('rating')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div  class="form-group col-md-4">
                    <label for="premios">Premios</label>
                    <input class="form-control" type="text" name="awards" id="awards"  value="{{old('awards',$pelicula->awards)}}">
                    @error('awards')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div  class="form-group col-md-4">
                    <label for="length">Duracion</label>
                    <input class="form-control" type="text" name="length" id="length"  value="{{old('length',$pelicula->length)}}">
                    @error('length')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div  class="form-group col-md-4">
                    <label for="duracion">Estreno</label>
                    <input class="form-control" type="" name="release_date" id="release_date"
                     value="{{old('release_date',$pelicula->release_date)}}">
                     @error('release_date')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>

                <div  class="form-group col-md-4">
                    <label for="">Genero</label>
                    {{ $pelicula->genre->id }} -
                    {{ $pelicula->genre->name }}
                </div>
                <div  class="form-group col-md-4">
                    <label for="poster">Poster</label>
                    <img src="/storage/{{$pelicula->poster}}" width="100px" alt="">
                    Cambiar imagen:<input class="form-control" type="file" name="poster" value="">
                    @error('poster')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>

            </form>
          </div>
      </article>
  </section>

@endsection
