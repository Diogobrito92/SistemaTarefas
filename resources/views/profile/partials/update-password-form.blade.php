<section>
    <header>
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Atualizar Senha') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Utilize uma senha forte e segura para proteger sua conta.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Senha Atual -->
        <div>
            <x-input-label
                for="update_password_current_password"
                :value="__('Senha Atual')"
            />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2"
            />
        </div>

        <!-- Nova Senha -->
        <div>
            <x-input-label
                for="update_password_password"
                :value="__('Nova Senha')"
            />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Confirmar Senha -->
        <div>
            <x-input-label
                for="update_password_password_confirmation"
                :value="__('Confirmar Nova Senha')"
            />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <!-- Botão -->
        <div class="flex items-center gap-4">

            <x-primary-button>
                {{ __('Salvar Alterações') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 font-medium"
                >
                    {{ __('Senha atualizada com sucesso.') }}
                </p>
            @endif

        </div>
    </form>
</section>