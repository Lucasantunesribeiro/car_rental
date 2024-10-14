@include('components.header')
<x-layout title="Editar Carro">

    <div class="container mt-4">
        <form action="{{ route('cars.update', $carro->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo"
                    value="{{ old('modelo', $carro->modelo) }}" required pattern="^[a-zA-Z0-9\s\-]+$"
                    title="Apenas letras, números, espaços e hifens.">
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" id="marca"
                    value="{{ old('marca', $carro->marca) }}" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" id="ano"
                    value="{{ old('ano', $carro->ano) }}" min="1900" max="{{ date('Y') }}" required>
            </div>

            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" name="cor" class="form-control" id="cor"
                    value="{{ old('cor', $carro->cor) }}" required>
            </div>

            <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" class="form-control" id="placa"
                    value="{{ old('placa', $carro->placa) }}" required
                    pattern="^[A-Z]{3}[0-9][A-Z0-9][0-9]{2}|[A-Z]{3}[0-9]{4}|[A-Z]{2}[0-9]{4}|[A-Z]{3}[-][0-9]{4}|[A-Z]{3}[\s][0-9]{4}$"
                    title="Formatos válidos: AAA1A23, AAA1234, AA1234, AAA-1234, AAA 1234">
            </div>

            <div class="mb-3">
                <label for="diaria" class="form-label">Diária (R$)</label>
                <input type="number" name="diaria" class="form-control" id="diaria"
                    value="{{ old('diaria', $carro->diaria) }}" min="0.01" step="0.01" required>
            </div>


            <div class="mb-3">
                <label for="disponibilidade" class="form-label">Disponibilidade</label>
                <select name="disponibilidade" class="form-control" id="disponibilidade" required>
                    <option value="1" {{ old('disponibilidade', $carro->disponibilidade) == 1 ? 'selected' : '' }}>
                        Disponível</option>
                    <option value="0" {{ old('disponibilidade', $carro->disponibilidade) == 0 ? 'selected' : '' }}>
                        Indisponível</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <div
                    style="margin-top:1em; margin-bottom: 1em; width: 300px; height: 300px; overflow: hidden; position: relative;">
                    @if ($carro->imagem)
                        <!-- Verifica se há uma imagem -->
                        <img src="{{ asset($carro->imagem) }}" alt="Imagem do carro"
                            style="width: 100%; height: 100%; object-fit: cover; position: absolute;">
                    @endif
                </div>
                <input type="file" name="imagem" class="form-control" id="imagem" accept="image/*">
            </div>


            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-layout>
