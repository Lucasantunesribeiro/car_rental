<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Locadora de Carros</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans antialiased">
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
<header class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800 no-underline">Locadora de Carros</a>
        <nav>
            <ul class="flex space-x-4 mt-4">
                <li><a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 no-underline">Início</a></li>
                <li><a href="{{ url('/cars') }}" class="text-gray-600 hover:text-blue-600 no-underline">Carros</a></li>
                <li><a href="{{ url('/profile') }}" class="text-gray-600 hover:text-blue-600 no-underline">Perfil</a></li>
                <li><a href="{{ url('/users') }}" class="text-gray-600 hover:text-blue-600 no-underline">Contas</a></li>
                <li><a href="{{ url('/rents') }}" class="text-gray-600 hover:text-blue-600 no-underline">Reservas</a></li>
                <li>
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600 no-underline">Sair</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>

