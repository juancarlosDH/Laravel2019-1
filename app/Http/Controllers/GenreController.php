<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
      //if(isset($_GET['name'])){
          $genres = Genre::where('name', 'LIKE', '%'.$_GET['name'].'%')->get();
      } else{
        $genres = Genre::all();
      //}
        return view('genres.index')->with( [ 'generos' => $genres] );

    }

    public function oneGenre($id){
  //    $genres = Genre::where('id', '=', $id)->first();

        $genres = Genre::find($id);
        // Hace un where, solo para llave primaria
        dd($genres);
    }














}
