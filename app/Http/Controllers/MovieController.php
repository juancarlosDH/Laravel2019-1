<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(6);
        $generos = Genre::all();
        $cantidad = ceil($movies->count() / 6);
        return view('movies.index')
          ->with([
            'cantidad' => $cantidad,
            'peliculas' => $movies,
            'generos' => $generos,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genre::all();
        return view('movies.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $movie = Movie::find($id);
      $actors = $movie->actors;

      $actoresOrdenados = $actors->sortBy('first_name');

      //aca lo recorro con un foreach sencillo
      foreach ($actoresOrdenados as $actor) {
        $arrayIds[] = $actor->id;
      }

      //aqui voy a usar un map para devolver una collection
      $arrayIds = $actoresOrdenados->map( function($actor){
        return $actor->id;
      });

      $actors = Actor::whereNotIn('id', $arrayIds)->get()->sortBy('first_name');
      //$actors = Actor::all()->sortBy('first_name');
      //dd($movie->actors);
        return view('movies.show')
          ->with([
            'pelicula' => $movie,
            'actores' => $actors,
            'actoresOrdenados' => $actoresOrdenados,
          ]);
    }

    public function addActor($id, Request $request)
    {
        //busco la movie por el id
          $movie = Movie::find($id);
        //guardo o attacheo el actor a la movie
          $movie->actors()->attach($request->actor_id);
        //redirijo a show de la movie
        return redirect('/movies/' . $id);
    }

    /**
     * Show the form for editing the specified movie.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cosa = Movie::find($id);
        return view('movies.edit')
          ->with([
            'pelicula' => $cosa
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
      //dd($request->file('poster'));
      $this->validate($request,
        [
          'title'=> 'required',
          'rating'=> 'required|numeric',
          'awards'=> 'required|numeric',
          'length'=> 'required|numeric',
          'release_date' => 'nullable|date',
          'poster' => 'nullable|image'
        ],
        [
          'required' => 'Campo obligatorio',
          'numeric' => 'Debe ser un numero',
          'date' => 'Fecha invalida',
          'image' => 'Imagen invalida'
        ]
      );
        //dd($request->title);
        //me traigo a la pelicula usando el find
        $peliculaAEditar = Movie::find($id);
        //le cambio los atributos o valores al objeto que me traje arriba
        $peliculaAEditar->title = $request->title;
        $peliculaAEditar->rating = $request->rating;
        $peliculaAEditar->length = $request->length;
        $peliculaAEditar->awards = $request->awards;
        $peliculaAEditar->release_date = $request->release_date;

        //si subo un archivo lo guardo
        if($request->file('poster')){
          //si tenia una imagen anterior la elimino, no elimino la default
          if($peliculaAEditar->poster && $peliculaAEditar->poster != 'default.png'){
            Storage::disk('public')->delete($peliculaAEditar->poster);
          }
          //al archivo que subi lo voy a guardar en el filesystem de laravel
          $rutaDelArchivo = $request->file('poster')->store('public');
          //le saco solo el nombre
          $nombreArchivo = basename($rutaDelArchivo);
          //guardo el nombre del archivo en el campo poster
          $peliculaAEditar->poster = $nombreArchivo;
        }

        //lo mando a guardar
        $peliculaAEditar->save();
        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
