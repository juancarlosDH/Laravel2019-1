<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Ixudra\Curl\CurlServiceProvider;
use Ixudra\Curl\Facades\Curl;

class CursoController extends Controller
{
    public function getCursosDH()
    {
        $url = 'http://digitalhouse.com/api/getCursos';
        $cursosJson = file_get_contents($url);
        $arrayCursos = json_decode($cursosJson,true);
        dd($arrayCursos);

    }

    public function getComisionesDH($curso_id)
    {
        $url = 'http://digitalhouse.com/api/getComisiones';
        $comisionesJson = file_get_contents($url);
        $arrayComisiones = json_decode($comisionesJson,true);

        foreach ($arrayComisiones['data'] as $comision) {
            if($comision['curso_id'] == $curso_id){
                echo $comision['sede'] . $comision['horarios'] . '<br>';
            }
        }

    }








    public function getConGuzzle()
    {
        $url = 'http://digitalhouse.com/api/getCursos';
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);

        //echo $response->getStatusCode(); # 200
        //echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'
    }

    public function getConCurl()
    {
        $url = 'http://digitalhouse.com/api/getCursos';
        $response = $response = Curl::to($url)->get();

        dd($response);
    }
}
