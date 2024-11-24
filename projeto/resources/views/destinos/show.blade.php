<x-app-layout>
    <h1>Detalhes do Destino</h1>
    <p><strong>Nome:</strong> {{ $destino->nome }}</p>
    <p><strong>Descrição:</strong> {{ $destino->descricao }}</p>

    <div class="btn-group" role="group" aria-label="Ações">
        <form action="{{ route('destinos.edit', $destino->id) }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>

        <form action="{{ route('destinos.destroy', $destino->id) }}" method="POST" class="me-2"
              onsubmit="return confirm('Tem certeza que deseja excluir este destino?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

        <form action="{{ route('destinos.index') }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-secondary">Voltar para a Listagem</button>
        </form>
    </div>
</x-app-layout>
