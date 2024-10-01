<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>
</head>
<body>
    <h1>Detalhes do Cliente</h1>
    <p>Nome: {{ $cliente->nome }}</p>
    <p>Email: {{ $cliente->email }}</p>
    <p>Telefone: {{ $cliente->telefone }}</p>
    <p>CPF: {{ $cliente->cpf }}</p>
    <p>Data de Nascimento: {{ $cliente->data_nascimento }}</p>

    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remover</button>
    </form>
</body>
</html>
