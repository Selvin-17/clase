<?php

namespace Nombre_clase\Http\Controllers;
use Nombre_clase\Http\Controllers\Controller;

class Prueba_controller extends Controller
{
    public function prueba($param){
        return 'prueba controller enviando parametro nombre '.$param;
    }
}

