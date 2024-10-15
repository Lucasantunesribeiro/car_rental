<body class="bg-gray-50 font-sans antialiased">

    @include('components.header')

    <main class="container mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $carro->modelo }} - {{ $carro->marca }}</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 border text-left">Atributo</th>
                    <th class="px-4 py-2 border text-left">Detalhe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 border">Ano</td>
                    <td class="px-4 py-2 border text-gray-700">{{ $carro->ano }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Cor</td>
                    <td class="px-4 py-2 border text-gray-700">{{ $carro->cor }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Placa</td>
                    <td class="px-4 py-2 border text-gray-700">{{ $carro->placa }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Preço da Diária</td>
                    <td class="px-4 py-2 border text-gray-700">R$ {{ number_format($carro->diaria, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Disponibilidade</td>
                    <td class="px-4 py-2 border text-gray-700">
                        {{ $carro->disponibilidade ? 'Disponível' : 'Indisponível' }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Imagem</td>
                    <td class="px-4 py-2 border">
                        <div class="w-64 h-40 overflow-hidden relative">
                            <img src="{{ asset($carro->imagem) }}" alt="Imagem do carro" class="w-full h-full object-cover absolute">
                        </div>
                    </td>
                    
                    
                </tr>
            </tbody>
        </table>
        <a href="{{ route('cars.index') }}"
            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Voltar para a lista de
            carros</a>
    </main>


    <footer class="bg-white shadow mt-10">
        <div class="container mx-auto px-6 py-4 text-center">
            <p class="text-gray-600">© 2024 Locadora de Carros. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
