<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Juros Simples</title>
</head>
<body>
    <h1>Calcular Juros Simples</h1>
    <form action="{{ url('juros-simples') }}" method="POST">
        @csrf
        <label for="capital">Capital:</label>
        <input type="number" name="capital" id="capital" required><br>

        <label for="taxa">Taxa (%):</label>
        <input type="number" name="taxa" id="taxa" required><br>

        <label for="tempo">Tempo (anos):</label>
        <input type="number" name="tempo" id="tempo" required><br>

        <button type="submit">Calcular Juros</button>
    </form>

    @if (isset($resultado))
        <h2>Juros: {{ $resultado }}</h2>
    @endif
</body>
</html>