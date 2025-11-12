<x-layouts.app>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-2xl font-bold mb-4">Editar Roles de {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Roles</label>
            @foreach($roles as $role)
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="form-checkbox" {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                <span class="ml-2">{{ $role->name }}</span>
            </label>
            @endforeach
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar Roles</button>
    </form>
</div>
</x-layouts.app>