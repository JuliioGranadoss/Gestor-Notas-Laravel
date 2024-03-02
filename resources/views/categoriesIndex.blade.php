<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Categorías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($categories as $category)
                    <div class="mb-4">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $category->nameCat }}
                        </h2>
                        <p>
                            {{ $category->descriptionCat }}
                        </p>
                    </div>
                    @endforeach

                    @if($categories->isEmpty())
                    <p>No hay categorías disponibles.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
