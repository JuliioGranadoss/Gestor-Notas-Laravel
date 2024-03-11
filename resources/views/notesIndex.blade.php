<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Notas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: #646464">
                    <a href="/notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Crear Nota</a><br><br>
                    @foreach($notes as $note)
                        <div class="mb-4">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ $note->title }}
                            </h2>
                            <p>
                                {{ $note->content }}
                            </p>
                            <p>
                                Categoría: 
                                @foreach($note->category as $category)
                                    {{ $category->nameCat }}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </p>
                            <p>
                                Fecha de creación: {{ $note->created_at->format('d-m-Y H:i:s') }}
                            </p>
                            <br>
                            <a href="/notes/{{$note->idNot}}/edit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Editar</a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class= "bg-red-500 hover:bg-red-600 text-white font-bold py-1.5 px-4 rounded" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                            <br><br>
                            <div>
                                @foreach(auth()->user()->categories as $category)
                                    @if($category->idUsu == auth()->user()->idUsu)
                                        @if($note->notasenCategoria($category->idCat))
                                        <a href="{{ route('quitar', ['idCat' => $category->idCat, 'idNot' => $note->idNot]) }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-1.5 px-4 rounded">{{ $category->nameCat }}</a>
                                        @endif
                                    @endif
                                    @if(!$category->notes()->find($note->idNot))
                                        <a href="{{ route('añadir', ['idCat' => $category->idCat, 'idNot' => $note->idNot]) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1.5 px-4 rounded">{{ $category->nameCat }}</a>
                                    @endif
                                @endforeach
                            </div>
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
