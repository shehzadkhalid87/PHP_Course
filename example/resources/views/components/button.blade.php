<a {{ $attributes->merge([
    'class' => 'inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition duration-200 ease-in-out']) }}>
    {{ $slot }}
</a>
