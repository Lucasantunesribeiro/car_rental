<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Locadora de Carros</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans antialiased">
    
    @include('components.header')
    <main class="container mx-auto px-6 py-10">
        <section class="mb-10">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Carros Disponíveis</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($carros as $car)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="flex justify-center items-center" style="width: 500px; height: 300px; overflow: hidden;">
                            <img src="{{ asset($car->imagem) }}" alt="Imagem do carro"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>


                        <div class="p-4">
                            <h3 class="text-xl font-bold">{{ $car->modelo}}</h3>
                            <p class="text-gray-600">{{ $car->marca}}</p>
                            <p class="mt-2 font-semibold">R$ {{ number_format($car->diaria, 2, ',', '.') }}/dia
                            </p>
                            {{-- <a href="{{ route('reservar', $car->id) }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Reservar</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Sobre Nós</h2>
            <p class="text-gray-600 mb-4">Bem-vindo à Locadora de Carros! Oferecemos uma experiência de locação de veículos incomparável, com uma vasta seleção de modelos para atender a todas as suas necessidades. Nossos carros são rigorosamente mantidos e estão sempre prontos para garantir uma viagem tranquila e segura.</p>
            <p class="text-gray-600">Nosso compromisso é proporcionar conforto e segurança em cada quilômetro percorrido. Entre em contato conosco para saber mais sobre nossas opções de locação e descubra como podemos tornar sua próxima viagem ainda mais especial.</p>
        </section>
    </main>

    <footer class="bg-white shadow mt-10">
        <div class="container mx-auto px-6 py-4 text-center">
            <p class="text-gray-600">© 2024 Locadora de Carros. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>
