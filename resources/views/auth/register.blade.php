<x-guest-layout>

    <div class="mb-6 text-center">

        <h2 class="text-2xl font-bold text-slate-800">
            Criar Conta
        </h2>

        <p class="text-gray-500 mt-1">
            Cadastre-se para utilizar o sistema
        </p>

    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>

            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Nome
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3"
            >

            <x-input-error :messages="$errors->get('name')" class="mt-2" />

        </div>

        <!-- Email -->
        <div class="mt-5">

            <label class="block text-sm font-semibold text-gray-700 mb-2">
                E-mail
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="username"
                class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3"
            >

            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>

        <!-- Password -->
        <div class="mt-5">

            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Senha
            </label>

            <input
                type="password"
                name="password"
                required
                autocomplete="new-password"
                class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3"
            >

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <!-- Confirm Password -->
        <div class="mt-5">

            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Confirmar Senha
            </label>

            <input
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3"
            >

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        </div>

        <div class="mt-8">

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition duration-200 shadow-lg"
            >
                Criar Conta
            </button>

        </div>

        <div class="mt-6 text-center">

            <a
                href="{{ route('login') }}"
                class="text-blue-600 hover:text-blue-800 font-semibold"
            >
                Já possui conta? Entrar
            </a>

        </div>

    </form>

</x-guest-layout>