<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Velocidade Média</title>
</head>
<body>
    <h1>Calcular Velocidade Média</h1>
    <form action="{{ url('velocidade-media') }}" method="POST">
        @csrf
        <label for="distancia">Distância (km):</label>
        <input type="number" name="distancia" id="distancia" required><br>

        <label for="tempo">Tempo (horas):</label>
        <input type="number" name="tempo" id="tempo" required><br>

        <button type="submit">Calcular Velocidade Média</button>
    </form>

    @if (isset($resultado))
        <h2>Velocidade Média: {{ $resultado }} km/h</h2>
    @endif
</body>
</html>