<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Notas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($notes as $note)
                        <div class="mb-4">

                            <a href="{{ route('notes.create') }}" class="btn btn-primary">Crear Nota</a><br><br>

                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ $note->title }}
                            </h2>
                            <p>
                                {{ $note->content }}
                            </p>
                            <br>
                            <p>
                                Fecha de creación: {{ $note->created_at->format('d-m-Y H:i:s') }}
                            </p>
                            <br><br>
                            <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </div>
                    @endforeach
                    
                    @if($notes->isEmpty())
                        <p>No hay notas disponibles.</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
