<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Locadora de Carros') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


    @isset($header)
        <header class="bg-white shadow py-3">
            <div class="container">
                <h1 class="h3">{{ $header }}</h1>
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="py-4">
        <div class="container">
            {{ $slot }}  <!-- Aqui o conteúdo específico da página será inserido -->
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
<script>
    document.addEventListener('alpine:init', () => {
        console.log('Alpine.js está inicializado!');
    });
</script>

</body>

</html>
