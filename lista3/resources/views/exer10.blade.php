<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Perímetro do Retângulo</title>
</head>
<body>
    <h1>Calcular Perímetro do Retângulo</h1>
    <form action="{{ url('perimetro-retangulo') }}" method="POST">
        @csrf
        <label for="largura">Largura:</label>
        <input type="number" name="largura" id="largura" required><br>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" required><br>

        <button type="submit">Calcular Perímetro</button>
    </form>

    @if (isset($resultado))
        <h2>Perímetro: {{ $resultado }} unidades</h2>
    @endif
</body>
</html>

