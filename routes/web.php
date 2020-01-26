<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserController@index');
route::get('/usuario', 'UserController@usuario');
//por la expresion regular RegEx solo pasa si la url contiene información netamente numerica, si no es asi
//pasa a usuario/nuevo imprimiendo "Registro de nuevo usuario"
route::get('/usuario/{id}', 'UserController@UsrID')
    ->where('id','\d');
route::get('/usuario/nuevo', 'UserController@UsuarioNuevo');
route::get('/usuario/{nombre}/{nickname?}', 'NewUserController');
