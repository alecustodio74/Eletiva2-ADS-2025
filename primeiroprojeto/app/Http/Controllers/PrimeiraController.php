<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function teste() {
        return "Teste em laravel";
    }

    public function abrirForm() {
        return view("exemplo"); 
        
    }

    public function resposta(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return "Soma: ".$soma;
    }

    public function subtrairForm() {
        return view("subtrair");
    }

    public function respSubtrair(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $subtracao = $valor1 - $valor2;
        return "Subtração: ".$subtracao;
    }
}
