<x-app-layout>
    <h1>Editar Destino</h1>
    <form action="{{ route('destinos.update', $destino->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $destino->nome }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $destino->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    <div class="mt-3">
        <a href="{{ route('destinos.index') }}" class="btn btn-secondary">Voltar para a Listagem</a>
    </div>
</x-app-layout>
