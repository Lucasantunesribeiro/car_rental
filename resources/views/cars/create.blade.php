@include('components.header')
<x-layout title="Adicionar Novo Carro">
    <div class="container mt-5">

        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group mt-3">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="form-group mt-3">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>

            <div class="form-group mt-3">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" id="ano" name="ano" required>
            </div>

            <div class="form-group mt-3">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" required>
            </div>

            <div class="form-group mt-3">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" id="placa" name="placa" required>
            </div>

            <div class="form-group mt-3">
                <label for="diaria">Preço da Diária (R$)</label>
                <input type="number" step="0.01" class="form-control" id="diaria" name="diaria" required>
            </div>

            <div class="form-group mt-3">
                <label for="disponibilidade">Disponibilidade</label>
                <select class="form-control" id="disponibilidade" name="disponibilidade" required>
                    <option value="1">Disponível</option>
                    <option value="0">Indisponível</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" class="form-control" id="imagem" accept="image/*">
            </div>



            <button type="submit" class="btn btn-success mt-4">Adicionar Carro</button>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-4">Voltar</a>
        </form>
    </div>
</x-layout>
