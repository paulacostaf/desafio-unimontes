<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Minhas Tarefas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex gap-2">
                <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Nova Tarefa
                </a>
                <a href="{{ route('tasks.all') }}" class="bg-gray-600 text-white px-4 py-2 rounded">
                    Todas as Tarefas
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @forelse($tasks as $task)
                        <div class="border-b py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-semibold text-lg">{{ $task->title }}</h3>
                                    <p class="text-gray-600">{{ $task->description }}</p>
                                    <span
                                        class="text-sm {{ $task->status === 'concluida' ? 'text-green-500' : 'text-yellow-500' }}">
                                        {{ $task->status === 'concluida' ? 'Concluída' : 'Pendente' }}
                                    </span>
                                </div>
                                <div class="flex gap-2">
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 rounded">
                                            Excluir
                                        </button>
                                    </form>
                                    <a href="{{ route('tasks.edit', $task) }}"
                                        class="bg-yellow-400 text-white px-3 py-1 rounded">
                                        Editar
                                    </a>
                                    @if ($task->status === 'pendente')
                                        <form action="{{ route('tasks.concluir', $task) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="bg-green-500 text-white px-3 py-1 rounded">
                                                Concluir
                                            </button>
                                        </form>
                                    @endif
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
