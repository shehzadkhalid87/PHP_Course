<x-layout>
    <x-slot:heading>Create a Job</x-slot:heading>

    <div class="max-w-2xl mx-auto mt-10 bg-white-80 p-6 rounded-2xl shadow-lg text-black">
        <form action="/jobs" method="POST">
            @csrf
            <!-- Job Title -->
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-black-700 mb-2">Job Title</label>
                <input type="text" id="title" name="title" required
                       class="w-full px-3 py-2 bg-white-20 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Salary -->
            <div class="mb-5">
                <label for="salary" class="block text-sm font-medium text-black-700 mb-2">Salary</label>
                <input type="text" id="salary" name="salary" required
                       class="w-full px-3 py-2 bg-white-20 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end gap-4">
                <a href="/jobs" class="text-black-700 hover:text-gray-100">Cancel</a>
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-md font-semibold text-white">
                    Create Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
