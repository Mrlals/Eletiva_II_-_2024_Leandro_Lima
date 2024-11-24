<x-app-layout>
    <h1>Editar Pacote</h1>
    <form action="{{ route('pacotes.update', $pacote->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" id="destino" class="form-control" value="{{ $pacote->destino->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ $pacote->data_inicio }}" required>
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{ $pacote->data_fim }}" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" name="valor" id="valor" class="form-control" value="{{ $pacote->valor }}" required>
        </div>

        <button type="submit" class="btn btn-primery">Atualizar</button>
    </form>

    <div class="mt-3">
    <a href="{{ route('pacotes.index') }}" class="btn btn-secondary">Voltar para a Listagem</a>
    </div>

</x-app-layout>
