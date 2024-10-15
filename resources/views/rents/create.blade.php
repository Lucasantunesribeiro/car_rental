@include('components.header')

<body class="bg-gray-50 font-sans antialiased">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main class="container mx-auto px-6 py-10">
        <div class="container">
            <h2>Criar Novo Aluguel</h2>

            <form action="{{ route('rents.alugar') }}" method="POST">
                @csrf
                <input type="hidden" name="carro_id" value="{{ $carro->id }}">

                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700">Data de Início:</label>
                    <input type="date" name="start_date" required
                        class="mt-1 block w-full border border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="end_date" class="block text-gray-700">Data de Fim:</label>
                    <input type="date" name="end_date" required
                        class="mt-1 block w-full border border-gray-300 rounded-md">
                </div>

                <button type="submit"
                    class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Confirmar Aluguel
                </button>
            </form>
        </div>
    </main>
</body>
