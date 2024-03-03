<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 text-white font-semibold rounded-md shadow-sm transition duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>
