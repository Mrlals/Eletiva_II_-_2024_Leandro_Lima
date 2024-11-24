<x-app-layout>
    <h1>Listagem de Vendas</h1>
    
    <form action="{{ route('vendas.create') }}" method="GET">
        <button type="submit" class="btn btn-success">Registrar Nova Venda</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Pacote</th>
                <th>Data de Contratação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendas as $venda)
                <tr>
                    <td>{{ $venda->id }}</td>
                    <td>{{ $venda->cliente->nome }}</td>
                    <td>{{ $venda->pacote->destino->nome }}</td>
                    <td>{{ $venda->data_contratacao }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Ações">
                            <form action="{{ route('vendas.edit', $venda->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{ route('vendas.show', $venda->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-primary">Ver</button>
                            </form>

                            <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" 
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta venda?');" class="me-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
