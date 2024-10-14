<body class="bg-gray-50 font-sans antialiased">
    @include('components.header')

    <main class="container mx-auto px-6 py-10">
        <div class="mt-5 bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Modelo</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Marca</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Ano</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Cor</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Placa</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Preço da Diária</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Disponibilidade</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Imagem</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($carros as $carro)
                        <tr>
                            <td class="px-4 py-2">{{ $carro->id }}</td>
                            <td class="px-4 py-2">{{ $carro->modelo }}</td>
                            <td class="px-4 py-2">{{ $carro->marca }}</td>
                            <td class="px-4 py-2">{{ $carro->ano }}</td>
                            <td class="px-4 py-2">{{ $carro->cor }}</td>
                            <td class="px-4 py-2">{{ $carro->placa }}</td>
                            <td class="px-4 py-2">R$ {{ number_format($carro->diaria, 2, ',', '.') }}</td>
                            <td class="px-4 py-2">{{ $carro->disponibilidade ? 'Disponível' : 'Indisponível' }}</td>
                            <td class="px-4 py-2">

                                <div class="w-24 h-16 overflow-hidden relative">
                                    
                                    <img src="{{ asset($carro->imagem) }}" alt="Imagem do carro" class="w-full h-full object-cover absolute">

                                </div>




                            </td>
                            <td class="px-4 py-2">
                                <!-- Botão Ver com cor azul -->
                                <a href="{{ route('cars.show', $carro->id) }}" class="btn btn-info btn-sm">Ver</a>

                                <!-- Botão Editar com cor amarela -->
                                <a href="{{ route('cars.edit', $carro->id) }}"
                                    class="btn btn-warning btn-sm">Editar</a>

                                <!-- Botão Deletar com cor vermelha -->
                                <form action="{{ route('cars.destroy', $carro->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja excluir este carro?')">Deletar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="{{ route('cars.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Adicionar Novo Carro</a>
            <a href="{{ route('home') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Voltar</a>
        </div>
    </main>
</body>
