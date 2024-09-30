<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Projeto</title>
</head>
<body>
    <h1>Criar Projeto</h1>
    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('projetos.index') }}">Voltar</a>
</body>
</html>
