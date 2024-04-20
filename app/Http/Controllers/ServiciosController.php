<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    function contenido()
    {
        $servicios=DB::table('servicios')->get();
        $retorno=["data"=>[]];
        foreach ($servicios as $servicio) {
            if($servicio->activo==1) {
                $elemento = [
                    "id" => $servicio->id,
                    "titulo" => [
                        $servicio->idioma => $servicio->titulo
                    ],
                    "texto" => [
                        $servicio->idioma => $servicio->contenido
                    ],
                    "activo" => $servicio->activo
                ];
                array_push($retorno["data"], $elemento);
            }
        }
        //Generamos una respuesta exitosa con el cuerpo siendo data
        // laravel crea una respuesta http con codigo 200 (http tiene codigos de estados) y transforma la data en json
        return response()->json($retorno);
    }
}
