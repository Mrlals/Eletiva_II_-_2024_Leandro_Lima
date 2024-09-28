<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="{{ url('imc') }}" method="POST">
        @csrf
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" required><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br>

        <button type="submit">Calcular IMC</button>
    </form>

    @if (isset($resultado))
        <h2>IMC: {{ number_format($resultado, 2) }}</h2>
    @endif
</body>
</html>
