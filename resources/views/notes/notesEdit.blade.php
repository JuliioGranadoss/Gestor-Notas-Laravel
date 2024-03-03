<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('notes.update', $note) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título:</label>
                            <input type="text" name="title" id="title" class="form-input mt-1 block w-full" value="{{ $note->title }}" />
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contenido:</label>
                            <textarea name="content" id="content" rows="4" class="form-textarea mt-1 block w-full">{{ $note->content }}</textarea>
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>