<x-app-layout>
    <h1>Detalhes do Cliente</h1>
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $cliente->data_nascimento }}</p>

    <div class="btn-group" role="group" aria-label="Ações">
        <form action="{{ route('clientes.edit', $cliente->id) }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>

        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="me-2"
              onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

        <form action="{{ route('clientes.index') }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-secondary">Voltar para a Listagem</button>
        </form>
    </div>
</x-app-layout>
