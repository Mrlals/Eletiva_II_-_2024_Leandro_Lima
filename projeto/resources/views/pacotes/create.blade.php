<x-app-layout>
    <h1>Criar Novo Pacote</h1>
    <form action="{{ route('pacotes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <select name="destino_id" id="destino" class="form-control" required>
                <option value="">Selecione o Destino</option>
                @foreach ($destinos as $destino)
                    <option value="{{ $destino->id }}">{{ $destino->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" name="valor" id="valor" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('pacotes.index') }}" class="btn btn-secondary">Voltar para a Listagem</a>
    </div>
</x-app-layout>
