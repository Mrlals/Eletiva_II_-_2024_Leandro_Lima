<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Desconto</title>
</head>
<body>
    <h1>Calcular Desconto</h1>
    <form action="{{ url('desconto') }}" method="POST">
        @csrf
        <label for="valor">Valor original:</label>
        <input type="number" name="valor" id="valor" required><br>

        <label for="percentual">Percentual de desconto (%):</label>
        <input type="number" name="percentual" id="percentual" required><br>

        <button type="submit">Calcular Desconto</button>
    </form>

    @if (isset($resultado))
        <h2>Valor final: {{ $resultado }}</h2>
    @endif
</body>
</html>