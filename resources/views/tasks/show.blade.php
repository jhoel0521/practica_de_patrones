<x-layouts.app>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-2xl font-bold mb-4">Detalles de la Tarea</h1>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <p class="mb-2"><strong>ID:</strong> {{ $task->id }}</p>
        <p class="mb-2"><strong>Título:</strong> {{ $task->title }}</p>
        <p class="mb-2"><strong>Descripción:</strong> {{ $task->description }}</p>
        <p class="mb-2"><strong>Completada:</strong> {{ $task->completed ? 'Sí' : 'No' }}</p>
        <div class="mt-4">
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Volver</a>
            @can('edit tasks', $task)
            <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
            @endcan
        </div>
    </div>
</div>
</x-layouts.app>