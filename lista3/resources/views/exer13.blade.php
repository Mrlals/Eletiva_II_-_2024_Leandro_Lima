<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Metros para Centímetros</title>
</head>
<body>
    <h1>Converter Metros para Centímetros</h1>
    <form action="{{ url('metros-centimetros') }}" method="POST">
        @csrf
        <label for="metros">Metros:</label>
        <input type="number" name="metros" id="metros" required><br>

        <button type="submit">Converter</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }} centímetros</h2>
    @endif
</body>
</html>

