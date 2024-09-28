<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista3Controller extends Controller
{
    public function somaForm() {
        return view('lista3.soma');
    }

    public function somar(Request $request) {
        $resultado = $request->num1 + $request->num2;
        return view('lista3.soma', ['resultado' => $resultado]);
    }

    public function subtracaoForm() {
        return view('lista3.subtracao');
    }

    public function subtrair(Request $request) {
        $resultado = $request->num1 - $request->num2;
        return view('lista3.subtracao', ['resultado' => $resultado]);
    }

    public function multiplicacaoForm() {
        return view('lista3.multiplicacao');
    }

    public function multiplicar(Request $request) {
        $resultado = $request->num1 * $request->num2;
        return view('lista3.multiplicacao', ['resultado' => $resultado]);
    }

    public function divisaoForm() {
        return view('lista3.divisao');
    }

    public function dividir(Request $request) {
        if ($request->num2 != 0) {
            $resultado = $request->num1 / $request->num2;
        } else {
            $resultado = 'Erro: divisão por zero';
        }
        return view('lista3.divisao', ['resultado' => $resultado]);
    }

    public function mediaForm() {
        return view('lista3.media');
    }

    public function calcularMedia(Request $request) {
        $media = ($request->nota1 + $request->nota2 + $request->nota3) / 3;
        return view('lista3.media', ['resultado' => $media]);
    }

    public function celsiusToFahrenheitForm() {
        return view('lista3.celsius_to_fahrenheit');
    }

    public function converterCelsiusParaFahrenheit(Request $request) {
        $fahrenheit = ($request->celsius * 9/5) + 32;
        return view('lista3.celsius_to_fahrenheit', ['resultado' => $fahrenheit]);
    }

    public function fahrenheitToCelsiusForm() {
        return view('lista3.fahrenheit_to_celsius');
    }

    public function converterFahrenheitParaCelsius(Request $request) {
        $celsius = ($request->fahrenheit - 32) * 5/9;
        return view('lista3.fahrenheit_to_celsius', ['resultado' => $celsius]);
    }

    public function areaRetanguloForm() {
        return view('lista3.area_retangulo');
    }

    public function calcularAreaRetangulo(Request $request) {
        $area = $request->largura * $request->altura;
        return view('lista3.area_retangulo', ['resultado' => $area]);
    }

    public function areaCirculoForm() {
        return view('lista3.area_circulo');
    }

    public function calcularAreaCirculo(Request $request) {
        $area = pi() * pow($request->raio, 2);
        return view('lista3.area_circulo', ['resultado' => $area]);
    }

    public function perimetroRetanguloForm() {
        return view('lista3.perimetro_retangulo');
    }

    public function calcularPerimetroRetangulo(Request $request) {
        $perimetro = 2 * ($request->largura + $request->altura);
        return view('lista3.perimetro_retangulo', ['resultado' => $perimetro]);
    }

    public function perimetroCirculoForm() {
        return view('lista3.perimetro_circulo');
    }

    public function calcularPerimetroCirculo(Request $request) {
        $perimetro = 2 * pi() * $request->raio;
        return view('lista3.perimetro_circulo', ['resultado' => $perimetro]);
    }

    public function potenciaForm() {
        return view('lista3.potencia');
    }

    public function calcularPotencia(Request $request) {
        $resultado = pow($request->base, $request->expoente);
        return view('lista3.potencia', ['resultado' => $resultado]);
    }

    public function metrosParaCentimetrosForm() {
        return view('lista3.metros_para_centimetros');
    }

    public function converterMetrosParaCentimetros(Request $request) {
        $centimetros = $request->metros * 100;
        return view('lista3.metros_para_centimetros', ['resultado' => $centimetros]);
    }

    public function quilometrosParaMilhasForm() {
        return view('lista3.quilometros_para_milhas');
    }

    public function converterQuilometrosParaMilhas(Request $request) {
        $milhas = $request->quilometros * 0.621371;
        return view('lista3.quilometros_para_milhas', ['resultado' => $milhas]);
    }

    public function imcForm() {
        return view('lista3.imc');
    }

    public function calcularIMC(Request $request) {
        $imc = $request->peso / pow($request->altura, 2);
        return view('lista3.imc', ['resultado' => $imc]);
    }

    public function descontoForm() {
        return view('lista3.desconto');
    }

    public function calcularDesconto(Request $request) {
        $valorDesconto = $request->valor * ($request->percentual / 100);
        $valorFinal = $request->valor - $valorDesconto;
        return view('lista3.desconto', ['resultado' => $valorFinal]);
    }

    public function jurosSimplesForm() {
        return view('lista3.juros_simples');
    }

    public function calcularJurosSimples(Request $request) {
        $juros = ($request->capital * $request->taxa * $request->tempo) / 100;
        return view('lista3.juros_simples', ['resultado' => $juros]);
    }

    public function jurosCompostosForm() {
        return view('lista3.juros_compostos');
    }

    public function calcularJurosCompostos(Request $request) {
        $montante = $request->capital * pow((1 + $request->taxa / 100), $request->tempo);
        return view('lista3.juros_compostos', ['resultado' => $montante]);
    }

    public function tempoForm() {
        return view('lista3.tempo');
    }

    public function converterTempo(Request $request) {
        $horas = $request->minutos / 60;
        return view('lista3.tempo', ['resultado' => $horas]);
    }

    public function velocidadeMediaForm() {
        return view('lista3.velocidade_media');
    }

    public function calcularVelocidadeMedia(Request $request) {
        $velocidade = $request->distancia / $request->tempo;
        return view('lista3.velocidade_media', ['resultado' => $velocidade]);
    }
}
