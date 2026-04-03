<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Todas as Tarefas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @forelse($tasks as $task)
                        <div class="border-b py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-semibold text-lg">{{ $task->title }}</h3>
                                    <p class="text-gray-600">{{ $task->description }}</p>
                                    <p class="text-sm text-gray-500">Responsável: {{ $task->user->name }}</p>
                                    <span class="text-sm {{ $task->status === 'concluida' ? 'text-green-500' : 'text-yellow-500' }}">
                                        {{ $task->status === 'concluida' ? 'Concluída' : 'Pendente' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">Nenhuma tarefa encontrada.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>