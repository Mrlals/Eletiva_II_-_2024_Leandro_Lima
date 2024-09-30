<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Projetos</title>
</head>
<body>
    <h1>Lista de Projetos</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <a href="{{ route('projetos.create') }}">Adicionar Projeto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projetos as $projeto)
                <tr>
                    <td>{{ $projeto->id }}</td>
                    <td>{{ $projeto->nome }}</td>
                    <td>{{ $projeto->descricao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
