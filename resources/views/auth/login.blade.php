<x-guest-layout>

    <div class="mb-6 text-center">

        <h2 class="text-2xl font-bold text-slate-800">
            Entrar
        </h2>

        <p class="text-gray-500 mt-1">
            Faça login para acessar o sistema
        </p>

    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                E-mail
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
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
                autocomplete="current-password"
                class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3"
            >

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <!-- Remember -->
        <div class="mt-5 flex items-center">

            <input
                id="remember_me"
                type="checkbox"
                class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500"
                name="remember"
            >

            <label for="remember_me" class="ms-2 text-sm text-gray-600">
                Lembrar de mim
            </label>

        </div>

        <div class="mt-8">

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition duration-200 shadow-lg"
            >
                Entrar
            </button>

        </div>

        <div class="mt-6 text-center">

            <a
                href="{{ route('register') }}"
                class="text-blue-600 hover:text-blue-800 font-semibold"
            >
                Não possui conta? Cadastre-se
            </a>

        </div>

    </form>

</x-guest-layout>