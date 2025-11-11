@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" name="completed" class="form-check-input" value="1" {{ $task->completed ? 'checked' : '' }}>
            <label class="form-check-label">Completada</label>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection