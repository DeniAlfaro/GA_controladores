<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function lista() {
        $noticias = array();
        $noticias[] = array(
            "titulo" => "Descubren cura del cáncer", 
            "fecha" => "10/01/2021");
        $noticias[] = array(
            "titulo" => "Vuelven clases presenciales", 
            "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }
}
