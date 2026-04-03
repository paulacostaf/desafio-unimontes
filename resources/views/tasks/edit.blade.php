<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Tarefa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('tasks.update', $task) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700">Título</label>
                            <input type="text" name="title" value="{{ old('title', $task->title) }}"
                                class="w-full border rounded px-3 py-2 mt-1">
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Descrição</label>
                            <textarea name="description" rows="4"
                                class="w-full border rounded px-3 py-2 mt-1">{{ old('description', $task->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Status</label>
                            <select name="status" class="w-full border rounded px-3 py-2 mt-1">
                                <option value="pendente" {{ $task->status === 'pendente' ? 'selected' : '' }}>Pendente</option>
                                <option value="concluida" {{ $task->status === 'concluida' ? 'selected' : '' }}>Concluída</option>
                            </select>
                            @error('status')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex gap-2">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                Salvar
                            </button>
                            <a href="{{ route('tasks.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>