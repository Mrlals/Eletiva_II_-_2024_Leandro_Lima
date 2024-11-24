<x-app-layout>
    <h1>Detalhes da Venda</h1>

    <p><strong>ID:</strong> {{ $venda->id }}</p>
    <p><strong>Cliente:</strong> {{ $venda->cliente->nome }}</p>
    <p><strong>Pacote:</strong> {{ $venda->pacote->destino->nome }}</p>
    <p><strong>Data de Contratação:</strong> {{ $venda->data_contratacao }}</p>

    <div class="btn-group" role="group" aria-label="Ações">
        <form action="{{ route('vendas.edit', $venda->id) }}" method="GET" class="me-2">
        <button type="submit" class="btn btn-warning">alterar</button>
        </form>

        <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" 
              onsubmit="return confirm('Tem certeza que deseja excluir esta venda?');" class="me-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

        <form action="{{ route('vendas.index') }}" method="GET" class="me-2">
            <button type="submit" class="btn btn-secondary">Voltar para a Listagem</button>
        </form>
    </div>

</x-app-layout>
