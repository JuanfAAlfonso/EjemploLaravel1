<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function Usuario(){

        if(request()->has('empty')){
            $users=[];
        }else {
            $users = [
                'Laura',
                'Diana',
                'Felipe',
                'Juan'
            ];
        }

        $title='Listado de usuarios';

        return view('users',compact('users','title'));
    }
    public function UsrID($id){
        return 'usuario con id ' . $id;
    }
    public function UsuarioNuevo(){
        return 'Registro de nuevo usuario';
    }
}
