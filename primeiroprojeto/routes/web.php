<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;



Route::get('/teste', [PrimeiraController::class, "teste"] );

Route::get('/exemplo', [PrimeiraController::class, "abrirForm"]);

Route::post('/exemplo_resposta', [PrimeiraController::class, "resposta"]);

Route::get('/subtrair', [PrimeiraController::class, "subtrairForm"]);

Route::post("/resposta_subtrair", [PrimeiraController::class, "respSubtrair"]);