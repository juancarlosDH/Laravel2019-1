<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function agregar(Request $req)
    {

      $user = Auth::user();
      $movie_id = $req->movie_id;

      $user->favoritos()->attach( $movie_id );

      

    }




}
