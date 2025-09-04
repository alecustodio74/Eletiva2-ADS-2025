<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Controllers\ClienteController;

//Aqui o Laravel está criando rotas automaticamente para o ClienteController
Route::resource('clientes', ClienteController::class);

//Listar Clientes - GET / clientes
//Route::get('/clientes', [ClienteController::class, 'index' })
//Abrir formulario para inserir registro - GET /clientes/create -- [ClienteController::class, 'create']
//Salvar dados - POST /clientes -- método 'store'
//Mostrar dados do registro - GET /clientes/{id_cliente} -- método show
//Abrir formulario para editar registro - GET /clientes/{id_cliente}/edit -- método edit
//Salvar alterações - PUT /clientes/{id_cliente} -- método update
//Excluir um registro - DELETE /clientes/{id_cliente} -- método destroy