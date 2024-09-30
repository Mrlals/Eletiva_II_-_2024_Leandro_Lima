<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/soma', function () {
    return view('exer01');
})->name('exibir-form-soma');

Route::post('/soma', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('num1') + $request->input('num2');
    return view('exer01', ['resultado' => $resultado]);
});

Route::get('/subtracao', function () {
    return view('exer02');
})->name('exibir-form-subtracao');

Route::post('/subtracao', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('num1') - $request->input('num2');
    return view('exer02', ['resultado' => $resultado]);
});

Route::get('/multiplicacao', function () {
    return view('exer03');
})->name('exibir-form-multiplicacao');

Route::post('/multiplicacao', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('num1') * $request->input('num2');
    return view('exer03', ['resultado' => $resultado]);
});

Route::get('/divisao', function () {
    return view('exer04');
})->name('exibir-form-divisao');

Route::post('/divisao', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('num1') / $request->input('num2');
    return view('exer04', ['resultado' => $resultado]);
});

Route::get('/media', function () {
    return view('exer05');
})->name('exibir-form-media');

Route::post('/media', function (Illuminate\Http\Request $request) {
    $resultado = ($request->input('num1') + $request->input('num2')) / 2;
    return view('exer05', ['resultado' => $resultado]);
});

Route::get('/celsius-fahrenheit', function () {
    return view('exer06');
})->name('exibir-form-celsius-fahrenheit');

Route::post('/celsius-fahrenheit', function (Illuminate\Http\Request $request) {
    $resultado = ($request->input('celsius') * 9/5) + 32;
    return view('exer06', ['resultado' => $resultado]);
});

Route::get('/fahrenheit-celsius', function () {
    return view('exer07');
})->name('exibir-form-fahrenheit-celsius');

Route::post('/fahrenheit-celsius', function (Illuminate\Http\Request $request) {
    $resultado = ($request->input('fahrenheit') - 32) * 5/9;
    return view('exer07', ['resultado' => $resultado]);
});

Route::get('/area-retangulo', function () {
    return view('exer08');
})->name('exibir-form-area-retangulo');

Route::post('/area-retangulo', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('base') * $request->input('altura');
    return view('exer08', ['resultado' => $resultado]);
});

Route::get('/area-circulo', function () {
    return view('exer09');
})->name('exibir-form-area-circulo');

Route::post('/area-circulo', function (Illuminate\Http\Request $request) {
    $resultado = pi() * pow($request->input('raio'), 2);
    return view('exer09', ['resultado' => $resultado]);
});

Route::get('/perimetro-retangulo', function () {
    return view('exer10');
})->name('exibir-form-perimetro-retangulo');

Route::post('/perimetro-retangulo', function (Illuminate\Http\Request $request) {
    $resultado = 2 * ($request->input('base') + $request->input('altura'));
    return view('exer10', ['resultado' => $resultado]);
});

Route::get('/perimetro-circulo', function () {
    return view('exer11');
})->name('exibir-form-perimetro-circulo');

Route::post('/perimetro-circulo', function (Illuminate\Http\Request $request) {
    $resultado = 2 * pi() * $request->input('raio');
    return view('exer11', ['resultado' => $resultado]);
});

Route::get('/potencia', function () {
    return view('exer12');
})->name('exibir-form-potencia');

Route::post('/potencia', function (Illuminate\Http\Request $request) {
    $resultado = pow($request->input('base'), $request->input('expoente'));
    return view('exer12', ['resultado' => $resultado]);
});

Route::get('/metros-centimetros', function () {
    return view('exer13');
})->name('exibir-form-metros-centimetros');

Route::post('/metros-centimetros', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('metros') * 100;
    return view('exer13', ['resultado' => $resultado]);
});

Route::get('/quilometros-milhas', function () {
    return view('exer14');
})->name('exibir-form-quilometros-milhas');

Route::post('/quilometros-milhas', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('quilometros') * 0.621371;
    return view('exer14', ['resultado' => $resultado]);
});

Route::get('/imc', function () {
    return view('exer15');
})->name('exibir-form-imc');

Route::post('/imc', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('peso') / pow($request->input('altura'), 2);
    return view('exer15', ['resultado' => $resultado]);
});

Route::get('/desconto', function () {
    return view('exer16');
})->name('exibir-form-desconto');

Route::post('/desconto', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('preco') * ($request->input('desconto') / 100);
    return view('exer16', ['resultado' => $resultado]);
});

Route::get('/juros-simples', function () {
    return view('exer17');
})->name('exibir-form-juros-simples');

Route::post('/juros-simples', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('capital') * $request->input('taxa') * $request->input('tempo') / 100;
    return view('exer17', ['resultado' => $resultado]);
});

Route::get('/juros-compostos', function () {
    return view('exer18');
})->name('exibir-form-juros-compostos');

Route::post('/juros-compostos', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('capital') * pow((1 + $request->input('taxa') / 100), $request->input('tempo')) - $request->input('capital');
    return view('exer18', ['resultado' => $resultado]);
});

Route::get('/conversao-dias', function () {
    return view('exer19');
})->name('exibir-form-conversao-dias');

Route::post('/conversao-dias', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('dias') * 24; // conversão para horas
    return view('exer19', ['resultado' => $resultado]);
});

Route::get('/velocidade-media', function () {
    return view('exer20');
})->name('exibir-form-velocidade-media');

Route::post('/velocidade-media', function (Illuminate\Http\Request $request) {
    $resultado = $request->input('distancia') / $request->input('tempo');
    return view('exer20', ['resultado' => $resultado]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categoria', CategoriaController::class);
});

require __DIR__.'/auth.php';
