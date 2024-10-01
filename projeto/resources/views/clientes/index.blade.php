<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Cadastrar Novo Cliente</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show', $cliente->id) }}">{{ $cliente->nome }}</a>
                <!-- Link para editar o cliente -->
                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                <!-- Formulário para excluir o cliente -->
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remover</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
