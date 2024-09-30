<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista3Controller extends Controller
{
    public function exibirSoma()
    {
        return view('exer01');
    }

    public function calcularSoma(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
        ]);

        $resultado = $request->input('numero1') + $request->input('numero2');
        return view('exer01', compact('resultado'));
    }

    public function exibirSubtracao()
    {
        return view('exer02');
    }

    public function calcularSubtracao(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
        ]);

        $resultado = $request->input('numero1') - $request->input('numero2');
        return view('exer02', compact('resultado'));
    }

    public function exibirMultiplicacao()
    {
        return view('exer03');
    }

    public function calcularMultiplicacao(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
        ]);

        $resultado = $request->input('numero1') * $request->input('numero2');
        return view('exer03', compact('resultado'));
    }

    public function exibirDivisao()
    {
        return view('exer04');
    }

    public function calcularDivisao(Request $request)
    {
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric|min:1', // evitar divisão por zero
        ]);

        $resultado = $request->input('numero1') / $request->input('numero2');
        return view('exer04', compact('resultado'));
    }

    public function exibirMedia()
    {
        return view('exer05');
    }

    public function calcularMedia(Request $request)
    {
        $request->validate([
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'nota3' => 'required|numeric',
        ]);

        $resultado = ($request->input('nota1') + $request->input('nota2') + $request->input('nota3')) / 3;
        return view('exer05', compact('resultado'));
    }

    public function exibirCelsiusFahrenheit()
    {
        return view('exer06');
    }

    public function calcularCelsiusFahrenheit(Request $request)
    {
        $request->validate([
            'celsius' => 'required|numeric',
        ]);

        $resultado = ($request->input('celsius') * 9/5) + 32;
        return view('exer06', compact('resultado'));
    }

    public function exibirFahrenheitCelsius()
    {
        return view('exer07');
    }

    public function calcularFahrenheitCelsius(Request $request)
    {
        $request->validate([
            'fahrenheit' => 'required|numeric',
        ]);

        $resultado = ($request->input('fahrenheit') - 32) * 5/9;
        return view('exer07', compact('resultado'));
    }

    public function exibirAreaRetangulo()
    {
        return view('exer08');
    }

    public function calcularAreaRetangulo(Request $request)
    {
        $request->validate([
            'base' => 'required|numeric',
            'altura' => 'required|numeric',
        ]);

        $resultado = $request->input('base') * $request->input('altura');
        return view('exer08', compact('resultado'));
    }

    public function exibirAreaCirculo()
    {
        return view('exer09');
    }

    public function calcularAreaCirculo(Request $request)
    {
        $request->validate([
            'raio' => 'required|numeric',
        ]);

        $resultado = pi() * pow($request->input('raio'), 2);
        return view('exer09', compact('resultado'));
    }

    public function exibirPerimetroRetangulo()
    {
        return view('exer10');
    }

    public function calcularPerimetroRetangulo(Request $request)
    {
        $request->validate([
            'base' => 'required|numeric',
            'altura' => 'required|numeric',
        ]);

        $resultado = 2 * ($request->input('base') + $request->input('altura'));
        return view('exer10', compact('resultado'));
    }

    public function exibirPerimetroCirculo()
    {
        return view('exer11');
    }

    public function calcularPerimetroCirculo(Request $request)
    {
        $request->validate([
            'raio' => 'required|numeric',
        ]);

        $resultado = 2 * pi() * $request->input('raio');
        return view('exer11', compact('resultado'));
    }

    public function exibirPotencia()
    {
        return view('exer12');
    }

    public function calcularPotencia(Request $request)
    {
        $request->validate([
            'base' => 'required|numeric',
            'exponente' => 'required|numeric',
        ]);

        $resultado = pow($request->input('base'), $request->input('exponente'));
        return view('exer12', compact('resultado'));
    }

    public function exibirMetrosCentimetros()
    {
        return view('exer13');
    }

    public function calcularMetrosCentimetros(Request $request)
    {
        $request->validate([
            'metros' => 'required|numeric',
        ]);

        $resultado = $request->input('metros') * 100;
        return view('exer13', compact('resultado'));
    }

    public function exibirQuilometrosMilhas()
    {
        return view('exer14');
    }

    public function calcularQuilometrosMilhas(Request $request)
    {
        $request->validate([
            'quilometros' => 'required|numeric',
        ]);

        $resultado = $request->input('quilometros') * 0.621371;
        return view('exer14', compact('resultado'));
    }

    public function exibirIMC()
    {
        return view('exer15');
    }

    public function calcularIMC(Request $request)
    {
        $request->validate([
            'peso' => 'required|numeric',
            'altura' => 'required|numeric|min:0.01',
        ]);

        $resultado = $request->input('peso') / pow($request->input('altura'), 2);
        return view('exer15', compact('resultado'));
    }

    public function exibirDesconto()
    {
        return view('exer16');
    }

    public function calcularDesconto(Request $request)
    {
        $request->validate([
            'preco' => 'required|numeric',
            'desconto' => 'required|numeric|min:0|max:100',
        ]);

        $resultado = $request->input('preco') * (1 - $request->input('desconto') / 100);
        return view('exer16', compact('resultado'));
    }

    public function exibirJurosSimples()
    {
        return view('exer17');
    }

    public function calcularJurosSimples(Request $request)
    {
        $request->validate([
            'capital' => 'required|numeric',
            'taxa' => 'required|numeric',
            'tempo' => 'required|numeric',
        ]);

        $resultado = $request->input('capital') * (1 + ($request->input('taxa') / 100) * $request->input('tempo'));
        return view('exer17', compact('resultado'));
    }

    public function exibirJurosCompostos()
    {
        return view('exer18');
    }

    public function calcularJurosCompostos(Request $request)
    {
        $request->validate([
            'capital' => 'required|numeric',
            'taxa' => 'required|numeric',
            'tempo' => 'required|numeric',
        ]);

        $resultado = $request->input('capital') * pow((1 + $request->input('taxa') / 100), $request->input('tempo'));
        return view('exer18', compact('resultado'));
    }

    public function exibirConversaoDias()
    {
        return view('exer19');
    }

    public function calcularConversaoDias(Request $request)
    {
        $request->validate([
            'dias' => 'required|numeric',
        ]);

        $resultado = $request->input('dias') * 24;
        return view('exer19', compact('resultado'));
    }

    public function exibirVelocidadeMedia()
    {
        return view('exer20');
    }

    public function calcularVelocidadeMedia(Request $request)
    {
        $request->validate([
            'distancia' => 'required|numeric',
            'tempo' => 'required|numeric|min:0.01', 
        ]);

        $resultado = $request->input('distancia') / $request->input('tempo');
        return view('exer20', compact('resultado'));
    }
}
