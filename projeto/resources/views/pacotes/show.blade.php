<x-app-layout>
    <h1>Detalhes do Pacote</h1>
    <p><strong>ID:</strong> {{ $pacote->id }}</p>
    <p><strong>Destino:</strong> {{ $pacote->destino->nome }}</p>
    <p><strong>Data de Início:</strong> {{ \Carbon\Carbon::parse($pacote->data_inicio)->format('d/m/Y') }}</p>
    <p><strong>Data de Fim:</strong> {{ \Carbon\Carbon::parse($pacote->data_fim)->format('d/m/Y') }}</p>
    <p><strong>Valor:</strong> R$ {{ number_format($pacote->valor, 2, ',', '.') }}</p>

    <div class="btn-group" role="group" aria-label="Ações">
        <form action="{{ route('pacotes.edit', $pacote->id) }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>

        <form action="{{ route('pacotes.destroy', $pacote->id) }}" method="POST" 
              onsubmit="return confirm('Tem certeza que deseja excluir este pacote?');" class="me-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

        <form action="{{ route('pacotes.index') }}" method="GET" class="me-2">
                <button type="submit" class="btn btn-secondary">Voltar para a Listagem</button>
        </form>
    </div>

</x-app-layout>
