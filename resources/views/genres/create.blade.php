@extends('layouts.main')

@section('content')

  <section class="principal">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">

            <h1>Nuevo Genero</h1>

<form class="" action="/crearGenero" method="post">

  @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

</div>
</article>
</section>

@endsection
