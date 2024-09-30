<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Tempo</title>
</head>
<body>
    <h1>Converter Minutos para Horas</h1>
    <form action="{{ url('converter-tempo') }}" method="POST">
        @csrf
        <label for="minutos">Minutos:</label>
        <input type="number" name="minutos" id="minutos" required><br>

        <button type="submit">Converter</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }} horas</h2>
    @endif
</body>
</html>