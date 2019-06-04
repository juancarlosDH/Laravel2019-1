<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date', 'genre_id'];

    public function dameNombreGenero()
    {
      if($this->genre_id){
        $genero = Genre::find($this->genre_id);
        return $genero->name;
      }
      return 'Sin Genero';
    }

    







}
