<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Token de redefinição de senha -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- E-mail -->
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" value="Senha" />
            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full pr-16" type="password" name="password" required
                    autocomplete="new-password" />
                <button type="button" onclick="togglePassword('password', this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Senha -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Confirmar Senha" />
            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-16" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <button type="button" onclick="togglePassword('password_confirmation', this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Redefinir Senha
            </x-primary-button>
        </div>
    </form>

    <script>
        function togglePassword(id, button) {
            const input = document.getElementById(id);
            if (input.type === 'password') {
                input.type = 'text';
                button.textContent = 'Ocultar';
            } else {
                input.type = 'password';
                button.textContent = 'Mostrar';
            }
        }
    </script>
</x-guest-layout>
