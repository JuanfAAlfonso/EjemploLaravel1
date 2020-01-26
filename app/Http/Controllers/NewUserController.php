<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function __invoke($nombre, $nickname=null)
    {
        if($nickname){
            return "Bienvenido {$nombre}, tu apodo es {$nickname}";
        }else{
            return "Bienvenido {$nombre}";
        }
    }
}
