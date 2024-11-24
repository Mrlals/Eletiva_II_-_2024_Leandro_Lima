<x-app-layout>
    <h1>Criar Novo Destino</h1>
    <form action="{{ route('destinos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <div class="mt-3">
        <a href="{{ route('destinos.index') }}" class="btn btn-secondary">Voltar para a Listagem</a>
    </div>
</x-app-layout>
