<x-layout>
    <x-slot:heading>Create job</x-slot:heading>


    <div class="max-w-2xl mx-auto mt-10 bg-white-80 p-6 rounded-2xl shadow-lg text-black">
        <form method="POST" action="/jobs">
            @csrf
            <!-- Job Title -->
            <x-form-field>
                <x-form_label for="title">job Title</x-form_label>
                <x-form_input type="text" id="title" name="title" placeholder="Sale Manager"/>
                <x-form_error name="title"/>
            </x-form-field>

            <!-- Salary -->
            <x-form-field>

                <x-form_label for="salary">salary</x-form_label>
                <x-form_input type="text" id="salary" name="salary" placeholder="$5000 USD"/>
                <x-form_error name="salary"/>
            </x-form-field>

            <!-- Submit and Cancel buttons -->
            <div class="flex justify-end gap-4">
                <a href="/jobs" class="text-gray-700 hover:text-gray-900">Cancel</a>
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-md font-semibold text-white">
                    Create Job
                </button>
            </div>
        </form>
    </div>

</x-layout>
