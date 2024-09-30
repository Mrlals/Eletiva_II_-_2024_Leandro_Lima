<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius para Fahrenheit</title>
</head>
<body>
    <h1>Converter Celsius para Fahrenheit</h1>
    <form action="{{ url('celsius-fahrenheit') }}" method="POST">
    @csrf
    <label for="celsius">Celsius:</label>
    <input type="number" name="celsius" id="celsius" required><br>

    <button type="submit">Converter</button>
</form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }} °F</h2>
    @endif
</body>
</html>
