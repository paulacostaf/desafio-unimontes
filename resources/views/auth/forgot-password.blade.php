<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Informe seu e-mail para receber o link de redefinição.
    </div>

    <!-- Status da Sessão -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- E-mail -->
        <div>
            <x-input-label for="email" value="E-mail" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">
                Voltar ao login
            </a>
            <x-primary-button>
                Enviar Link
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>