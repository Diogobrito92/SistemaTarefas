<section>

    <header>

        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Informações do Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Atualize as informações da sua conta e endereço de e-mail.') }}
        </p>

    </header>

    <!-- Formulário de verificação -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Formulário principal -->
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">

        @csrf
        @method('patch')

        <!-- Nome -->
        <div>

            <x-input-label
                for="name"
                :value="__('Nome')"
            />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />

        </div>

        <!-- Email -->
        <div>

            <x-input-label
                for="email"
                :value="__('E-mail')"
            />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div>

                    <p class="text-sm mt-2 text-gray-800">

                        {{ __('Seu endereço de e-mail ainda não foi verificado.') }}

                        <button
                            form="send-verification"
                            class="underline text-sm text-blue-600 hover:text-blue-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        >
                            {{ __('Clique aqui para reenviar o e-mail de verificação.') }}
                        </button>

                    </p>

                    @if (session('status') === 'verification-link-sent')

                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Um novo link de verificação foi enviado para seu e-mail.') }}
                        </p>

                    @endif

                </div>

            @endif

        </div>

        <!-- Botão -->
        <div class="flex items-center gap-4">

            <x-primary-button>
                {{ __('Salvar Alterações') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')

                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 font-medium"
                >
                    {{ __('Perfil atualizado com sucesso.') }}
                </p>

            @endif

        </div>

    </form>

</section>