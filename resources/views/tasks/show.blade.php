@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Tarea</h1>
    <p><strong>ID:</strong> {{ $task->id }}</p>
    <p><strong>Título:</strong> {{ $task->title }}</p>
    <p><strong>Descripción:</strong> {{ $task->description }}</p>
    <p><strong>Completada:</strong> {{ $task->completed ? 'Sí' : 'No' }}</p>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Editar</a>
</div>
@endsection