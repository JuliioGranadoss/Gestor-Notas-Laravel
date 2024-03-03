<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('¡Gestiona tus notas con facilidad en NotaCraft!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-4">¡Bienvenido a NotaCraft, {{ Auth::user()->name }}!</h1>
                    
                    <p class="mb-4">{{ __("Aquí puedes gestionar tus notas y categorías de manera fácil y rápida:") }}</p>

                    <ul class="list-disc ml-6 mb-4">
                        <li>{{ __("Añadir una Nueva Nota") }}</li>
                        <li>{{ __("Editar una Nota Existente") }}</li>
                        <li>{{ __("Borrar una Nota") }}</li>
                        <li>{{ __("Crear una Nueva Categoría") }}</li>
                        <li>{{ __("Borrar una Categoría") }}</li>
                    </ul>

                    <p>{{ __("Explora y disfruta de tu experiencia con NotaCraft.") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
