<x-app-layout>
    <h1>Listagem de Pacotes</h1>
    
    <form action="{{ route('pacotes.create') }}" method="GET">
        <button type="submit" class="btn btn-success">Adicionar Novo Pacote</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destino</th>
                <th>Data de Início</th>
                <th>Data de Fim</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacotes as $pacote)
                <tr>
                    <td>{{ $pacote->id }}</td>
                    <td>{{ $pacote->destino->nome }}</td>
                    <td>{{ $pacote->data_inicio }}</td>
                    <td>{{ $pacote->data_fim }}</td>
                    <td>R$ {{ $pacote->valor }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Ações">
                            <form action="{{ route('pacotes.edit', $pacote->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{ route('pacotes.show', $pacote->id) }}" method="GET" class="me-2">
                                <button type="submit" class="btn btn-primary">Ver</button>
                            </form>

                            <form action="{{ route('pacotes.destroy', $pacote->id) }}" method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este pacote?');" class="me-2">
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
