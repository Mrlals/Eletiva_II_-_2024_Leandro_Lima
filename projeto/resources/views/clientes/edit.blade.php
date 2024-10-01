<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome: </label>
        <input type="text" name="nome" value="{{ $cliente->nome }}" required><br>

        <label>Email: </label>
        <input type="email" name="email" value="{{ $cliente->email }}" required><br>

        <label>Telefone: </label>
        <input type="text" name="telefone" value="{{ $cliente->telefone }}" required><br>

        <label>CPF: </label>
        <input type="text" name="cpf" value="{{ $cliente->cpf }}" required><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" value="{{ $cliente->data_nascimento }}" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>