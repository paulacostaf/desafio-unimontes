<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Atualizar Senha
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Garanta que sua conta esteja utilizando uma senha segura.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" value="Senha Atual" />
            <div class="relative">
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full pr-16" autocomplete="current-password" />
                <button type="button" onclick="togglePassword('update_password_current_password', this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" value="Nova Senha" />
            <div class="relative">
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full pr-16" autocomplete="new-password" />
                <button type="button" onclick="togglePassword('update_password_password', this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" value="Confirmar Senha" />
            <div class="relative">
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full pr-16" autocomplete="new-password" />
                <button type="button" onclick="togglePassword('update_password_password_confirmation', this)"
                    class="absolute inset-y-0 right-0 px-3 text-sm text-gray-600 hover:text-gray-800">
                    Mostrar
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>Salvar</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >Salvo.</p>
            @endif
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
</section>