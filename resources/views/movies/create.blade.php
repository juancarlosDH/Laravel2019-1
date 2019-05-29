@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form method="post" action="">
              <div class="form-group">
                <div>
                    <label for="titulo">Titulo</label>
                    <input type="text" name="title" id="title"/>
                </div>
                <div>
                    <label for="rating">Rating</label>
                    <input type="text" name="rating" id="rating"/>
                </div>
                <div>
                    <label for="premios">Premios</label>
                    <input type="text" name="awards" id="awards"/>
                </div>
                <div>
                    <label for="length">Duracion</label>
                    <input type="text" name="length" id="length"/>
                </div>

                <div>
                    <label for="duracion">Extreno</label>
                    <input type="date" name="release_date" id="release_date"/>
                </div>

                <input type="submit" value="Agregar Pelicula" name="submit"/>
            </form>
          </div>
      </article>
  </section>

@endsection
