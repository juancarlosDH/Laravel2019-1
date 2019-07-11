@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form class="form-inline pull-right" action="" method="get">
                 <div class="form-group">
                     Buscador de Generos:
                     <input type="text" name="name" value="" class="form-control">
                     <button type="submit" class="btn btn-primary">Buscar</button>
                 </div>
             </form>

            @if (session('mensaje'))
               <div class="alert alert-success">
                   {{ session('mensaje') }}
               </div>
            @endif
             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo Genero</a>

             <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <form class="" id="form-genre" action="/genres/create" method="post">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Nuevo Genero</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="name">Nombre</label>
              <div class="">
                  <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                  @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="guardar-genero">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
        </form>
    </div>
  </div>
</div>

             <div id="genres-list">
  @foreach ($generos as $genero)
    <a href="/genres/{{$genero->id}}">{{ $genero->name }}</a><br>
  @endforeach
            </div>


<script type="text/javascript" src="js/librerias.js"></script>
<script src="js/genres.js"></script>
@endsection
