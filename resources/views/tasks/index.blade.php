@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Crear Nueva Tarea</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Completada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->completed ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection