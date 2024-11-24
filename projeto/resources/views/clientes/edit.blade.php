<x-app-layout>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" value="{{ $cliente->cpf }}" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" value="{{ $cliente->data_nascimento }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    
    <div class="mt-3">
        <a href="{{ route('clientes.index') }}" class="btn btn-success">Voltar para a Listagem</a>
    </div>
</x-app-layout>
