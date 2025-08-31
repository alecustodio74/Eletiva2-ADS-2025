<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function teste() {
        return "Teste em laravel";
    }

    public function somarForm() {
        return view("somar"); 
        
    }

    public function respSomar(Request $request) {
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

    public function multiplicarForm() {
        return view("multiplicar");
    }

    public function respMultiplicar(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multiplicacao = $valor1 * $valor2;
        return "Multiplicação: ".$multiplicacao;
    }

    public function dividirForm() {
        return view("dividir");
    }

    public function respDividir(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 != 0) {
            $divisao = $valor1 / $valor2;
            return "Divisão: ".$divisao;
        } else {
            return "Erro: Divisão por zero não é permitida.";
        }
    }

    public function mediaForm() {
        return view("media");
    }

    public function respMedia(Request $request) {
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $media = ($nota1 + $nota2 + $nota3) /3;
        return "Média: ".$media;
    }
    //6 - Temperatura de Celsius para Fahrenheit
    public function temperForm() {
        return view("temper");
    }

    public function respTemper(Request $request) {
        $celsius = $request->celsius;
        $fahrenheit = ($celsius * 9 / 5) + 32;
        return "Temperatura em Fahrenheit: ".$fahrenheit. " graus F";
    }
    //7 - Temperatura de Fahrenheit para Celsius
    public function temper2Form() {
        return view("temper2");
    }

    public function respTemper2(Request $request) {
        $fahrenheit = $request->fahrenheit;
        $celsius = ($fahrenheit - 32) * 5 / 9;
        return "Temperatura em Celsius: ".$celsius. " graus C";
    }

    //8 - Calcular a área de um Retângulo
    public function retanguloForm() {
        return view("retangulo");
    }

    public function respRetangulo(Request $request) {
        $base = $request->base;
        $altura = $request->altura;
        if ($base > 0 && $altura > 0) {
            $area = $base * $altura;
            return "Área do retângulo: ".$area. " cm²";
            }
            else return "Erro: A base e a altura devem ser maiores que zero.";
    }

    //9 - Calcular a área de um Círculo
    public function circuloForm() {
        return view("circulo");
    }

    public function respCirculo(Request $request) {
        $raio = $request->raio;
        if ($raio > 0) {
            $area = pi() * ($raio * $raio);
            return "Área do círculo: ". number_format($area,2) . " cm²";
            }
            else return "Erro: O raio deve ser maior que zero.";
    }

    //10 - Calcular o perímetro de um Retângulo
    public function periRetanguloForm() {
        return view("peri_retangulo");
    }

    public function respPeriRetangulo(Request $request) {
        $base = $request->base;
        $altura = $request->altura;
        if ($base > 0 && $altura > 0) {
            $perimetro = 2 * ($base + $altura);
            return "Perímetro do retângulo: ".$perimetro. " cm";
            }
            else return "Erro: A base e a altura devem ser maiores que zero.";
    }
    
    //11 - Calcular o perímetro de um Círculo
    public function periCirculoForm() {
        return view("peri_circulo");
    }

    public function respPeriCirculo(Request $request) {
        $raio = $request->raio;
        if ($raio > 0) {
            $perimetro = 2 * pi() * $raio;
            return "Perímetro do círculo: ". number_format($perimetro,2) . " cm";
            }
            else return "Erro: O raio deve ser maior que zero.";
    }

    //12 - Calcular base e expoente
    public function baseExpoenteForm() {
        return view("base_expoente");
    }

    public function respBaseExpoente(Request $request) {
        $base = $request->base;
        $expoente = $request->expoente;
        if ($expoente >= 0) {
            $resultado = pow($base, $expoente);
            return "Resultado: ". $resultado;
            }
            else return "Erro: O expoente deve ser um número inteiro não negativo.";
    }

    //13 - Converter metros em centímetros
    public function metrosForm() {
        return view("metros");
    }

    public function respMetros(Request $request) {
        $metros = $request->metros;
        if ($metros >= 0) {
            $centimetros = $metros * 100;
            return "Centímetros: ". $centimetros . " cm";
            }
            else return "Erro: A medida em metros deve ser um número não negativo.";
    }

    //14 - Converter quilometros em milhas
    public function quilometrosForm() {
        return view("quilometros"); 
    }

    public function respQuilometros(Request $request) {
        $quilometros = $request->quilometros;
        if ($quilometros > 0) {
            $milhas = $quilometros * 0.621371;
            return "Milhas: ". number_format($milhas,2) . " mi";
            }
            else return "Erro: A medida em quilômetros deve maior que zero.";
    }

    public function imcForm() {
        return view("imc");
    }

    public function respIMC(Request $request) {
        $peso = $request->peso;
        $altura = $request->altura;
        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            return "IMC: ". number_format($imc,2);
            }
            else return "Erro: O peso e a altura devem ser maiores que zero.";
    }
    //16 - Preço e desconto
    public function descontoForm() {
        return view("desconto");
    }

    public function respDesconto(Request $request) {
        $preco = $request->preco;
        $desconto = $request->desconto;
        if ($preco > 0 && $desconto >= 0 && $desconto <= 100) {
            $valorDesconto = ($desconto / 100) * $preco;
            $precoFinal = $preco - $valorDesconto;
            return "Preço com desconto: R$ ". number_format($precoFinal,2);
            }
            else return "Erro: O preço deve ser maior que zero e o desconto deve estar entre 0 e 100.";
    }

    //17 - Juros simples
    public function jurosSimplesForm() {
        return view("juros_simples");
    }

    public function respJurosSimples(Request $request) {
        $capital = $request->capital;
        $taxa = $request->taxa;
        $tempo = $request->tempo;
        if ($capital > 0 && $taxa >= 0 && $tempo > 0) {
            $juros = ($capital * $taxa * $tempo) / 100;
            return "Juros Simples: R$ ". number_format($juros,2);
        }
        else return "Erro: O capital e o tempo devem ser maiores que zero, e a taxa deve ser não negativa.";
    }

    //18 - Juros compostos
    public function jurosCompostosForm() {
        return view("juros_compostos");
    }

    public function respJurosCompostos(Request $request) {
        $capital = $request->capital;
        $taxa = $request->taxa;
        $tempo = $request->tempo;
        if ($capital > 0 && $taxa >= 0 && $tempo > 0) {
            $montante = $capital * pow((1 + $taxa / 100), $tempo);
            return "Montante com Juros Compostos: R$ ". number_format($montante,2);
        }
        else return "Erro: O capital e o tempo devem ser maiores que zero, e a taxa deve ser não negativa.";
    }

    //19 - Converter dias em horas, minutos e segundos
    public function converterDiasForm() {
        return view("converter_dias");    
    }

    public function respConverterDias(Request $request) {
        $dias = $request->dias;
        if ($dias >= 0) {
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;
            return "$dias dias equivalem a: <br> $horas horas <br> $minutos minutos <br> $segundos segundos";
        }
        else return "Erro: O número de dias não pode negativo.";
    }

    //20 - Calcular a velocidade média
    public function veloMediaForm() {
        return view("velo_media");
    }

    public function respVeloMedia(Request $request) {
        $distancia = $request->distancia;
        $tempo = $request->tempo;
        if ($distancia > 0 && $tempo > 0) {
            $veloMedia = $distancia / $tempo;
            return "Velocidade média: " . number_format($veloMedia, 2) . "km/h";
        }
        else return "Erro: A distância e o tempo devem ser maiores que zero.";
    }
}   