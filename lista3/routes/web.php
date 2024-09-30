<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lista3Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/soma', [Lista3Controller::class, 'exibirSoma'])->name('exibir-form-soma');
Route::post('/soma', [Lista3Controller::class, 'calcularSoma'])->name('calcular-soma');

Route::get('/subtracao', [Lista3Controller::class, 'exibirSubtracao'])->name('exibir-form-subtracao');
Route::post('/subtracao', [Lista3Controller::class, 'calcularSubtracao'])->name('calcular-subtracao');

Route::get('/multiplicacao', [Lista3Controller::class, 'exibirMultiplicacao'])->name('exibir-form-multiplicacao');
Route::post('/multiplicacao', [Lista3Controller::class, 'calcularMultiplicacao'])->name('calcular-multiplicacao');

Route::get('/divisao', [Lista3Controller::class, 'exibirDivisao'])->name('exibir-form-divisao');
Route::post('/divisao', [Lista3Controller::class, 'calcularDivisao'])->name('calcular-divisao');

Route::get('/media', [Lista3Controller::class, 'exibirMedia'])->name('exibir-form-media');
Route::post('/media', [Lista3Controller::class, 'calcularMedia'])->name('calcular-media');

Route::get('/celsius-fahrenheit', [Lista3Controller::class, 'exibirCelsiusFahrenheit'])->name('exibir-form-celsius-fahrenheit');
Route::post('/celsius-fahrenheit', [Lista3Controller::class, 'calcularCelsiusFahrenheit'])->name('calcular-celsius-fahrenheit');

Route::get('/fahrenheit-celsius', [Lista3Controller::class, 'exibirFahrenheitCelsius'])->name('exibir-form-fahrenheit-celsius');
Route::post('/fahrenheit-celsius', [Lista3Controller::class, 'calcularFahrenheitCelsius'])->name('calcular-fahrenheit-celsius');

Route::get('/area-retangulo', [Lista3Controller::class, 'exibirAreaRetangulo'])->name('exibir-form-area-retangulo');
Route::post('/area-retangulo', [Lista3Controller::class, 'calcularAreaRetangulo'])->name('calcular-area-retangulo');

Route::get('/area-circulo', [Lista3Controller::class, 'exibirAreaCirculo'])->name('exibir-form-area-circulo');
Route::post('/area-circulo', [Lista3Controller::class, 'calcularAreaCirculo'])->name('calcular-area-circulo');

Route::get('/perimetro-retangulo', [Lista3Controller::class, 'exibirPerimetroRetangulo'])->name('exibir-form-perimetro-retangulo');
Route::post('/perimetro-retangulo', [Lista3Controller::class, 'calcularPerimetroRetangulo'])->name('calcular-perimetro-retangulo');

Route::get('/perimetro-circulo', [Lista3Controller::class, 'exibirPerimetroCirculo'])->name('exibir-form-perimetro-circulo');
Route::post('/perimetro-circulo', [Lista3Controller::class, 'calcularPerimetroCirculo'])->name('calcular-perimetro-circulo');

Route::get('/potencia', [Lista3Controller::class, 'exibirPotencia'])->name('exibir-form-potencia');
Route::post('/potencia', [Lista3Controller::class, 'calcularPotencia'])->name('calcular-potencia');

Route::get('/metros-centimetros', [Lista3Controller::class, 'exibirMetrosCentimetros'])->name('exibir-form-metros-centimetros');
Route::post('/metros-centimetros', [Lista3Controller::class, 'calcularMetrosCentimetros'])->name('calcular-metros-centimetros');

Route::get('/quilometros-milhas', [Lista3Controller::class, 'exibirQuilometrosMilhas'])->name('exibir-form-quilometros-milhas');
Route::post('/quilometros-milhas', [Lista3Controller::class, 'calcularQuilometrosMilhas'])->name('calcular-quilometros-milhas');

Route::get('/imc', [Lista3Controller::class, 'exibirIMC'])->name('exibir-form-imc');
Route::post('/imc', [Lista3Controller::class, 'calcularIMC'])->name('calcular-imc');

Route::get('/desconto', [Lista3Controller::class, 'exibirDesconto'])->name('exibir-form-desconto');
Route::post('/desconto', [Lista3Controller::class, 'calcularDesconto'])->name('calcular-desconto');

Route::get('/juros-simples', [Lista3Controller::class, 'exibirJurosSimples'])->name('exibir-form-juros-simples');
Route::post('/juros-simples', [Lista3Controller::class, 'calcularJurosSimples'])->name('calcular-juros-simples');

Route::get('/juros-compostos', [Lista3Controller::class, 'exibirJurosCompostos'])->name('exibir-form-juros-compostos');
Route::post('/juros-compostos', [Lista3Controller::class, 'calcularJurosCompostos'])->name('calcular-juros-compostos');

Route::get('/conversao-dias', [Lista3Controller::class, 'exibirConversaoDias'])->name('exibir-form-conversao-dias');
Route::post('/conversao-dias', [Lista3Controller::class, 'calcularConversaoDias'])->name('calcular-conversao-dias');

Route::get('/velocidade-media', [Lista3Controller::class, 'exibirVelocidadeMedia'])->name('exibir-form-velocidade-media');
Route::post('/velocidade-media', [Lista3Controller::class, 'calcularVelocidadeMedia'])->name('calcular-velocidade-media');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
