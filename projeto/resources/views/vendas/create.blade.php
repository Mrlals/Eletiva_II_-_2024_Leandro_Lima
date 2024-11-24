<x-app-layout>
    <h1>Registrar Nova Venda</h1>
    <form action="{{ route('vendas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente:</label>
            <select name="cliente_id" id="cliente_id" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pacote_id" class="form-label">Pacote:</label>
            <select name="pacote_id" id="pacote_id" class="form-control" required>
                @foreach($pacotes as $pacote)
                    <option value="{{ $pacote->id }}">{{ $pacote->destino->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data_contratacao" class="form-label">Data de Contratação:</label>
            <input type="date" name="data_contratacao" id="data_contratacao" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    <div class="mt-3">
    <a href="{{ route('vendas.index') }}" class="btn btn-secondary">Voltar para a Listagem</a>
    </div>
</x-app-layout>
