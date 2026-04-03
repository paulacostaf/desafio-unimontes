<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex gap-4">
                        <a href="{{ route('tasks.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                            Minhas Tarefas
                        </a>
                        <a href="{{ route('tasks.all') }}" class="bg-gray-600 text-white px-4 py-2 rounded">
                            Todas as Tarefas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>