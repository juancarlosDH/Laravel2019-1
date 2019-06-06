<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date', 'genre_id'];

    public function genre()
    {
      return $this->belongsTo(Genre::class);
    }

    public function dameGenero()
    {
      if($this->genre_id){
        $genero = Genre::find($this->genre_id);
        return $genero->name;
      }
      return 'Sin Genero';
    }

    public function actors()
    {
      return $this->belongsToMany(Actor::class);
    }









}
