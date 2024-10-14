<body class="bg-gray-50 font-sans antialiased">

    @include('components.header') 

    <main class="container mx-auto px-6 py-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-6">
            {{ __('Perfil') }}
        </h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white shadow mt-10">
        <div class="container mx-auto px-6 py-4 text-center">
            <p class="text-gray-600">© 2024 Locadora de Carros. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
