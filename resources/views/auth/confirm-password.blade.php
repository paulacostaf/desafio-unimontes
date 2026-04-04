<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Esta é uma área segura da aplicação. Por favor, confirme sua senha antes de continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Senha -->
        <div>
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

        <div class="flex justify-end mt-4">
            <x-primary-button>
                Confirmar
            </x-primary-button>
        </div>
    </form>

    <script>
        function togglePassword(button) {
            const input = document.getElementById('password');
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
