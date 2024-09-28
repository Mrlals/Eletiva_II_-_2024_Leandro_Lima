<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lista3Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('soma', [Lista3Controller::class, 'somaForm']);
Route::post('soma', [Lista3Controller::class, 'somar']);

Route::get('subtracao', [Lista3Controller::class, 'subtracaoForm']);
Route::post('subtracao', [Lista3Controller::class, 'subtrair']);

Route::get('multiplicacao', [Lista3Controller::class, 'multiplicacaoForm']);
Route::post('multiplicacao', [Lista3Controller::class, 'multiplicar']);

Route::get('divisao', [Lista3Controller::class, 'divisaoForm']);
Route::post('divisao', [Lista3Controller::class, 'dividir']);

Route::get('media', [Lista3Controller::class, 'mediaForm']);
Route::post('media', [Lista3Controller::class, 'calcularMedia']);

Route::get('celsius-to-fahrenheit', [Lista3Controller::class, 'celsiusToFahrenheitForm']);
Route::post('celsius-to-fahrenheit', [Lista3Controller::class, 'converterCelsiusParaFahrenheit']);

Route::get('fahrenheit-to-celsius', [Lista3Controller::class, 'fahrenheitToCelsiusForm']);
Route::post('fahrenheit-to-celsius', [Lista3Controller::class, 'converterFahrenheitParaCelsius']);

Route::get('area-retangulo', [Lista3Controller::class, 'areaRetanguloForm']);
Route::post('area-retangulo', [Lista3Controller::class, 'calcularAreaRetangulo']);

Route::get('area-circulo', [Lista3Controller::class, 'areaCirculoForm']);
Route::post('area-circulo', [Lista3Controller::class, 'calcularAreaCirculo']);

Route::get('perimetro-retangulo', [Lista3Controller::class, 'perimetroRetanguloForm']);
Route::post('perimetro-retangulo', [Lista3Controller::class, 'calcularPerimetroRetangulo']);

Route::get('perimetro-circulo', [Lista3Controller::class, 'perimetroCirculoForm']);
Route::post('perimetro-circulo', [Lista3Controller::class, 'calcularPerimetroCirculo']);

Route::get('potencia', [Lista3Controller::class, 'potenciaForm']);
Route::post('potencia', [Lista3Controller::class, 'calcularPotencia']);

Route::get('metros-para-centimetros', [Lista3Controller::class, 'metrosParaCentimetrosForm']);
Route::post('metros-para-centimetros', [Lista3Controller::class, 'converterMetrosParaCentimetros']);

Route::get('quilometros-para-milhas', [Lista3Controller::class, 'quilometrosParaMilhasForm']);
Route::post('quilometros-para-milhas', [Lista3Controller::class, 'converterQuilometrosParaMilhas']);

Route::get('imc', [Lista3Controller::class, 'imcForm']);
Route::post('imc', [Lista3Controller::class, 'calcularIMC']);

Route::get('desconto', [Lista3Controller::class, 'descontoForm']);
Route::post('desconto', [Lista3Controller::class, 'calcularDesconto']);

Route::get('juros-simples', [Lista3Controller::class, 'jurosSimplesForm']);
Route::post('juros-simples', [Lista3Controller::class, 'calcularJurosSimples']);

Route::get('juros-compostos', [Lista3Controller::class, 'jurosCompostosForm']);
Route::post('juros-compostos', [Lista3Controller::class, 'calcularJurosCompostos']);

Route::get('tempo', [Lista3Controller::class, 'tempoForm']);
Route::post('tempo', [Lista3Controller::class, 'converterTempo']);

Route::get('velocidade-media', [Lista3Controller::class, 'velocidadeMediaForm']);
Route::post('velocidade-media', [Lista3Controller::class, 'calcularVelocidadeMedia']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
