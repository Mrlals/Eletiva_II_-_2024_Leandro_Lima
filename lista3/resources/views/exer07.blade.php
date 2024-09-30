<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit para Celsius</title>
</head>
<body>
    <h1>Converter Fahrenheit para Celsius</h1>
    <form action="{{ url('fahrenheit-celsius') }}" method="POST">
        @csrf
        <label for="fahrenheit">Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" required><br>

        <button type="submit">Converter</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }} °C</h2>
    @endif
</body>
</html>
