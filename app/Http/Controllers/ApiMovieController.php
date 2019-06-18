<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class ApiMovieController extends Controller
{
    public function getMovies(){
        $movies = Movie::all();
        return $movies;
    }
}
