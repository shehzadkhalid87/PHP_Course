<x-layout>
    <x-slot:heading>Home page</x-slot:heading>
    <h1>
        welcome to home page.
    </h1>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
</x-layout>
