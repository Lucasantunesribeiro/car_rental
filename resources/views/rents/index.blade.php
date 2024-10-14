@include('components.header')

<body class="bg-gray-50 font-sans antialiased">
    <main class="container mx-auto px-6 py-10">
        @if (session('success'))
            <div class="alert alert-success bg-green-200 text-green-800 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-2xl font-bold mb-4">Lista de Aluguéis</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($alugueis as $aluguel)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">ID: {{ $aluguel->id }}</h3>
                        <p class="text-gray-600">Carro: {{ $aluguel->carro->modelo }}</p>
                        <p class="text-gray-600">Data de Início: {{ $aluguel->data_inicio }}</p>
                        <p class="text-gray-600">Data de Fim: {{ $aluguel->data_fim }}</p>
                        <p class="mt-2 font-semibold">Valor Total: R$ {{ number_format($aluguel->valor_total, 2, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-2xl font-bold mt-10 mb-4">Carros Disponíveis para Aluguel</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($carrosDisponiveis as $car)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex justify-center items-center" style="width: 100%; height: 300px; overflow: hidden;">
                        <img src="{{ asset($car->imagem) }}" alt="Imagem do carro"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">{{ $car->modelo }}</h3>
                        <p class="text-gray-600">{{ $car->marca }}</p>
                        <p class="mt-2 font-semibold">R$ {{ number_format($car->diaria, 2, ',', '.') }}/dia</p>
                        <a href="{{ route('rents.create', ['carro' => $car->id]) }}"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Alugar
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
