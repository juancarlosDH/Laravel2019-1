<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $generos = Genre::all();
        $cantidad = ceil($movies->count() / 6);;
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
    public function show(Movie $movie)
    {
        //
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
      $this->validate($request,
        [
          'title'=> 'required',
          'rating'=> 'required|numeric',
          'awards'=> 'required|numeric',
          'length'=> 'required|numeric',
          'release_date' => 'nullable|date',
        ],
        [
          'required' => 'Campo obligatorio',
          'numeric' => 'Debe ser un numero',
          'date' => 'Fecha invalida',
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

        //lo mando a guardar
        $peliculaAEditar->save();

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
