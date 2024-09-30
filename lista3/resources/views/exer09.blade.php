<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Círculo</title>
</head>
<body>
    <h1>Calcular Área do Círculo</h1>
    <form action="{{ url('area-circulo') }}" method="POST">
        @csrf
        <label for="raio">Raio:</label>
        <input type="number" name="raio" id="raio" required><br>

        <button type="submit">Calcular Área</button>
    </form>

    @if (isset($resultado))
        <h2>Área: {{ $resultado }}</h2>
    @endif
</body>
</html>

