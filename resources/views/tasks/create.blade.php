@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" name="completed" class="form-check-input" value="1">
            <label class="form-check-label">Completada</label>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection