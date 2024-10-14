<section>
    <header>
        <h2 class="text-lg font-medium text-blue-800 dark:text-blue-100">
            {{ __('Atualizar Senha') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">
            {{ __('Certifique-se de que sua conta está usando uma senha longa e aleatória para se manter segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Senha Atual')" class="text-gray-800 dark:text-gray-200" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full border border-blue-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-600" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nova Senha')" class="text-gray-800 dark:text-gray-200" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full border border-blue-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-600" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar Senha')" class="text-gray-800 dark:text-gray-200" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border border-blue-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-500" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-blue-600 hover:bg-blue-700 text-white">{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400"
                >{{ __('Salvo.') }}</p>
            @endif
        </div>
    </form>
</section>
