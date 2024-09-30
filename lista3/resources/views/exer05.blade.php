<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
</head>
<body>
    <h1>Calcular média</h1>
    <form action="{{ url('media') }}" method="POST">
        @csrf
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" required><br>

        <button type="submit">Calcular média</button>
    </form>

    @if (isset($resultado))
        <h2>Média: {{ $resultado }}</h2>
    @endif
</body>
</html>
