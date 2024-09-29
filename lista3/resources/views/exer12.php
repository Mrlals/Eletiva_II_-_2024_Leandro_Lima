<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Potência</title>
</head>
<body>
    <h1>Calcular Potência</h1>
    <form action="{{ url('potencia') }}" method="POST">
        @csrf
        <label for="base">Base:</label>
        <input type="number" name="base" id="base" required><br>

        <label for="expoente">Expoente:</label>
        <input type="number" name="expoente" id="expoente" required><br>

        <button type="submit">Calcular Potência</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>

