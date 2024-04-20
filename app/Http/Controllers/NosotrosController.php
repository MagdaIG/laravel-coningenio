<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NosotrosController extends Controller
{
    function contenido()
    {
        $mision = DB::table('nosotros')->where('id', 3)->get()->first();
        $vision = DB::table('nosotros')->where('id', 4)->get()->first();
        // Transforme la data del endpoint a un array asociativo en php https://jsontophp.com/
        $data = [
            "data" => [
                "mision" => [
                    "titulo" => [
                        "esp" => $mision->titulo
                    ],
                    "contenido" => [
                        "esp" => $mision->contenido
                    ]
                ],
                "vision" => [
                    "titulo" => [
                        "esp" => $vision->titulo
                    ],
                    "contenido" => [
                        "esp" => $vision->contenido
                    ]
                ]
            ]
        ];
        return response()->json($data);
    }
}
