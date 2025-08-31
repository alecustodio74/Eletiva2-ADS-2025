<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

//Exemplo
Route::get('/teste', [PrimeiraController::class, "teste"] );

//1 - somar
Route::get('/somar', [PrimeiraController::class, "somarForm"]);

Route::post('/resposta_somar', [PrimeiraController::class, "respSomar"]);

//2 - subtrair
Route::get('/subtrair', [PrimeiraController::class, "subtrairForm"]);

Route::post('/resposta_subtrair', [PrimeiraController::class, "respSubtrair"]);

//3 - multiplicar
Route::get('multiplicar', [PrimeiraController::class, "multiplicarForm"]);

Route::post('/resposta_multiplicar', [PrimeiraController::class, "respMultiplicar"]);

//4 -  dividir
Route::get('dividir', [PrimeiraController::class, "dividirForm"]);

Route::post('/resposta_dividir', [PrimeiraController::class, "respDividir"]);

//5 - média entre 3 notas
Route::get('media', [PrimeiraController::class, "mediaForm"]);

Route::post('/resposta_media', [PrimeiraController::class, "respMedia"]);

//6 - Temperatura de Celsius para Fahrenheit
Route::get('temper', [PrimeiraController::class, "temperForm"]);

Route::post('/resposta_temper', [PrimeiraController::class, "respTemper"]);

//7 - Temperatura de Fahrenheit para Celsius
Route::get('temper2', [PrimeiraController::class, "temper2Form"]);

Route::post('/resposta_temper2', [PrimeiraController::class, "respTemper2"]);

//8 - Calcular a área de um Retângulo
Route::get('retangulo', [PrimeiraController::class, "retanguloForm"]);

Route::post('/resposta_retangulo', [PrimeiraController::class, "respRetangulo"]);

//9 - Calcular a área de um Círculo
Route::get('circulo', [PrimeiraController::class, "circuloForm"]);

Route::post('/resposta_circulo', [PrimeiraController::class, "respCirculo"]);

//10 - Calcular o perímetro de um Retângulo
Route::get('peri_retangulo', [PrimeiraController::class, "periRetanguloForm"]);

Route::post('/resposta_peri_retangulo', [PrimeiraController::class, "respPeriRetangulo"]);

//11 - Calcular o perímetro de um Círculo
Route::get('peri_circulo', [PrimeiraController::class, "periCirculoForm"]);

Route::post('/resposta_peri_circulo', [PrimeiraController::class, "respPeriCirculo"]);

//12 - Calcular base e expoente
Route::get('base_expoente', [PrimeiraController::class, "baseExpoenteForm"]);

Route::post('/resposta_base_expoente', [PrimeiraController::class, "respBaseExpoente"]);

//13 - Converter metros em centímetros
Route::get('metros', [PrimeiraController::class, "metrosForm"]);

Route::post('/resposta_metros', [PrimeiraController::class, "respMetros"]);

//14 - Converter quilometros em milhas
Route::get('quilometros', [PrimeiraController::class, "quilometrosForm"]);

Route::post('/resposta_quilometros', [PrimeiraController::class, "respQuilometros"]);

//15 - Calcular IMC
Route::get('imc', [PrimeiraController::class, "imcForm"]);

Route::post('/resposta_imc', [PrimeiraController::class, "respIMC"]);

//16 - Preço e desconto
Route::get('desconto', [PrimeiraController::class, "descontoForm"]);

Route::post('/resposta_desconto', [PrimeiraController::class, "respDesconto"]);

//17 - Juros simples
Route::get('juros_simples', [PrimeiraController::class, "jurosSimplesForm"]);

Route::post('/resposta_juros_simples', [PrimeiraController::class, "respJurosSimples"]);

//18 - Juros compostos
Route::get('juros_compostos', [PrimeiraController::class, "jurosCompostosForm"]);

Route::post('/resposta_juros_compostos', [PrimeiraController::class, "respJurosCompostos"]);

//19 - Converter dias em horas, minutos e segundos
Route::get('converter_dias', [PrimeiraController::class, "converterDiasForm"]);

Route::post('/resposta_converter_dias', [PrimeiraController::class, "respConverterDias"]);

//20 - Calcular a velocidade média
Route::get('velo_media', [PrimeiraController::class, "veloMediaForm"]);

Route::post('/resposta_velo_media', [PrimeiraController::class, "respVeloMedia"]);