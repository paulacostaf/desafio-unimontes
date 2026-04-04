<x-guest-layout>
    <!-- Status da Sessão -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- E-mail -->
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            @if ($errors->has('email'))
                <p class="mt-2 text-sm text-red-600">
                    E-mail ou senha inválidos.
                </p>
            @endif
        </div>

        <!-- Senha -->

        <div class="mt-4">
            <x-input-label for="password" value="Senha" />

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full pr-16" type="password" name="password" required
                    autocomplete="current-password" />

                <button type="button" onclick="togglePassword(this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <script>
            function togglePassword(button) {
                const passwordInput = document.getElementById('password');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    button.textContent = 'Ocultar';
                } else {
                    passwordInput.type = 'password';
                    button.textContent = 'Mostrar';
                }
            }
        </script>

        <!-- Lembrar de mim -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">Lembrar de mim</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif

            <a href="{{ route('register') }}" class="ms-3 underline text-sm text-gray-600 hover:text-gray-900">
                Cadastre-se
            </a>

            <x-primary-button class="ms-3">
                Entrar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
