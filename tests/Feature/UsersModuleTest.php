<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /** @test test if usuarios return correctly the information like the http status and the value 'usuarios' */
    function usuarios_status_value()
    {
       $this->get('/usuario')
           ->assertStatus(200)
           ->assertSee('Listado de usuarios')
           ->assertSee('Laura')
           ->assertSee('Diana')
           ->assertSee('Felipe')
           ->assertSee('Juan');
    }

    /** @test test the user id located on url */
    function Check_User_id(){
        $this->get('/usuario/5')
            ->assertStatus(200)
            ->assertSee('usuario con id 5');
    }

    /** @test check if the url prints the correct message */
    function registroUsuarioNUevo(){
        $this->get('/usuario/nuevo')
            ->assertStatus(200)
            ->assertSee('Registro de nuevo usuario');
    }

    /** @test NonmbreNickname only with name */
    function NombreNickname_only_with_name(){
        $this->get('/usuario/Felipe')
            ->assertStatus(200)
            ->assertSee('Bienvenido Felipe');
    }

    /** @test NombreNickname with name and nickname */
    function NombreNickname_both(){
        $this->get('usuario/felipe/dorocroft')
            ->assertStatus(200)
            ->assertSee('Bienvenido felipe, tu apodo es dorocroft');
    }
}
