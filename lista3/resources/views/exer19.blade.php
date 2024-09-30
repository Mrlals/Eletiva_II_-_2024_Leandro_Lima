<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Dias</title>
</head>
<body>
    <h1>Converter Dias para Horas, Minutos e Segundos</h1>
    <form action="{{ route('calcular-conversao-dias') }}" method="POST">
        @csrf
        <label for="dias">Dias:</label>
        <input type="number" name="dias" id="dias" required><br>

        <button type="submit">Converter</button>
    </form>

    @if (isset($horas) && isset($minutos) && isset($segundos))
        <h2>Resultado:</h2>
        <p>{{ $dias }} dias = {{ $horas }} horas : {{ $minutos }} minutos : {{ $segundos }} segundos</p>
    @endif
</body>
</html>
