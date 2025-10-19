<x-layout>
    <x-slot:heading>
        Edit Job — <span class="text-blue-600 font-semibold">{{ $job->title }}</span>
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg mt-8">
        <form method="POST" action="/jobs/{{$job->id}}">
            @csrf
            @method('PATCH')

            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Job Title</label>
                <input type="text" id="title" name="title" value="{{ $job->title }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                       required>
            </div>

            <div>
                <label for="salary" class="block text-gray-700 font-medium mb-2">Salary</label>
                <input type="text" id="salary" name="salary" value="{{ $job->salary }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                       required>
            </div>


            <div class="flex justify-between items-center">
                <a href="/jobs/all"
                   class="inline-block mt-4 px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    ← Cancel
                </a>
                <button type="submit"
                        class="px-6 mt-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-layout>
