<x-app-layout>
    <h1>Listagem de Destinos</h1>
    
    <form action="{{ route('destinos.create') }}" method="GET">
        <button type="submit" class="btn btn-success">Adicionar Novo Destino</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($destinos as $destino)
                <tr>
                    <td>{{ $destino->id }}</td>
                    <td>{{ $destino->nome }}</td>
                    <td>{{ $destino->descricao }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Ações">
                            <form action="{{ route('destinos.edit', $destino->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{ route('destinos.show', $destino->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-primary">Ver</button>
                            </form>

                            <form action="{{ route('destinos.destroy', $destino->id) }}" method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este destino?');" class="me-2">
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
