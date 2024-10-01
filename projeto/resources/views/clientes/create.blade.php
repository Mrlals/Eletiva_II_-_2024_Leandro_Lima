<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>Nome: </label>
        <input type="text" name="nome" required><br>
        
        <label>Email: </label>
        <input type="email" name="email" required><br>

        <label>Telefone: </label>
        <input type="text" name="telefone" required><br>

        <label>CPF: </label>
        <input type="text" name="cpf" required><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
