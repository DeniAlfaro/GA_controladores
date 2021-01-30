<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function lista() {
        $noticias = array();
        $noticias[] = array(
            "id" => 1,
            "titulo" => "Descubren cura del cáncer", 
            "fecha" => "10/01/2021");
        $noticias[] = array(
            "id" => 2,
            "titulo" => "Vuelven clases presenciales", 
            "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles($noticia) {
        //simulacion de solicitud de noticias
        $detalles_id = array();
        $detalles_id["titulo"] = "Noticia #" . $noticia;
        $detalles_id["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_id["fecha"] = "Fecha de la Noticia #" . $noticia;
        $detalles_id["cuerpo"] = "Este es el texto de la noticia #" . $noticia;
        $detalles_id["foto"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwWRH-oXGeRDRQxDcmt1EgAt-FzSg_qAQFBA&usqp=CAU";
  
        $argumentos = array();
        $argumentos["noticia"] = $detalles_id; 

        return view('noticias.detalles', $argumentos);
    }
}
