<!-- Botão para excluir a conta diretamente -->
<form method="POST" action="{{ route('profile.destroy') }}" class="p-6">
    @csrf
    @method('DELETE')

    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Tem certeza de que deseja excluir sua conta?') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Uma vez que sua conta for excluída, todos os recursos e dados serão permanentemente deletados. Por favor, insira sua senha para confirmar que deseja excluir sua conta permanentemente.') }}
    </p>

    <div class="mt-6">
        <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />
        <x-text-input
            id="password"
            name="password"
            type="password"
            class="mt-1 block w-3/4"
            placeholder="{{ __('Senha') }}"
            required
        />
        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
    </div>

    <div class="mt-6 flex justify-end">
        <x-secondary-button type="button" onclick="window.location='{{ url()->previous() }}'">
            {{ __('Cancelar') }}
        </x-secondary-button>

        <x-danger-button type="submit" class="ms-3">
            {{ __('Excluir Conta') }}
        </x-danger-button>
    </div>
</form>
