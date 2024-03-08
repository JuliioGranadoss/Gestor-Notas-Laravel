<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('¡Gestiona tus notas con facilidad en NotaCraft!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: #646464">
                    <h1 class="text-2xl font-semibold mb-4">¡Bienvenido a NotaCraft, {{ Auth::user()->name }}!</h1>
                    <p>{{ __("Explora y disfruta de tu experiencia con NotaCraft.") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
