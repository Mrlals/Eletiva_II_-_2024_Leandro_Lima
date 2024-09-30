<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Quilômetros para Milhas</title>
</head>
<body>
    <h1>Converter Quilômetros para Milhas</h1>
    <form action="{{ url('quilometros-milhas') }}" method="POST">
        @csrf
        <label for="quilometros">Quilômetros:</label>
        <input type="number" name="quilometros" id="quilometros" required><br>

        <button type="submit">Converter</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }} milhas</h2>
    @endif
</body>
</html>
