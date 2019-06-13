<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{

    public function index()
    {
      if(isset($_GET['name'])){
        $genres = Genre::where('name', 'LIKE', '%'.$_GET['name'].'%')->get();
      } else{
        $genres = Genre::all();
      }
        return view('genres.index')->with( [ 'generos' => $genres] );

    }

    public function oneGenre($id)
    {
      //  $genres = Genre::where('id', '=', $id)->first();

        $genre = Genre::find($id);
        // Hace un where, solo para llave primaria
        //dd($genres);
        return view('genres.show')->with(['genero'=>$genre]);


    }



    public function create()
    {
      return view('genres.create');
    }

    public function save(Request $request)
    {
        // $nombreGenero = $request->input('name');
        // dd($nombreGenero);

        //uso las validaciones de Laravel
        $this->validate( $request, [
            'name' => 'required|unique:genres',
        ],
        [
            'name.required' => 'El campo Nombre es Obligatorio',
            'name.unique' => 'El genero ya existe',
         ]);

        //si esta todo bien procedo a Guardar
        // primera forma create
        Genre::create(
          [
            'name' => $request->input('name')
          ]
        );

        //segunda forma new, seteo atributos y save
        // $genre = new Genre();
        // $genre->name = $request->input('name');
        // $genre->save();
        //
        // //tercera new y save
        // $genre = new Genre([
        //   'name' => $request->input('name')
        // ]);
        // $genre->save();

        return redirect('/genres')->with('mensaje', 'Genero guardado exitosamente!');
    }












}
