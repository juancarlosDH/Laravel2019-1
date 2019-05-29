<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function sumar($n1,$n2){
      return $n1+$n2;
    }

    public function restar($n1,$n2){
      return $n1-$n2;
    }
}
