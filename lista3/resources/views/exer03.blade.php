<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar dois números</title>
</head>
<body>
    <h1>Multiplicar dois números</h1>
    <form action="{{ url('multiplicacao') }}" method="POST">
        @csrf
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br>

        <button type="submit">Multiplicar</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
