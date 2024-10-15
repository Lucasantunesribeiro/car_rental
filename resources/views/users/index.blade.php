<body class="bg-gray-50 font-sans antialiased">

  @include('components.header')

  <main class="container mx-auto px-6 py-10">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-6">
          {{ __('Contas de Usuários') }}
      </h2>

      <table class="min-w-full mt-6 border border-gray-300">
          <thead>
              <tr class="bg-gray-100">
                  <th class="px-4 py-2 border">Nome</th>
                  <th class="px-4 py-2 border">Email</th>
                  <th class="px-4 py-2 border">Data de Criação</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
                  <tr>
                      <td class="px-4 py-2 border">{{ $user->name }}</td>
                      <td class="px-4 py-2 border">{{ $user->email }}</td>
                      <td class="px-4 py-2 border">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </main>

  <footer class="bg-white shadow mt-10">
      <div class="container mx-auto px-6 py-4 text-center">
          <p class="text-gray-600">© 2024 Locadora de Carros. Todos os direitos reservados.</p>
      </div>
  </footer>
</body>