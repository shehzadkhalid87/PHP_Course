<x-layout>
    <x-slot:heading></x-slot:heading>


    <div class="max-w-2xl mx-auto mt-10 bg-white-80 p-6 rounded-2xl shadow-lg text-black">
        <form method="POST" action="/jobs">
            @csrf
            <!-- Job Title -->
            <div class="mb-5">
                <x-form_label for="title">job Title</x-form_label>
                <input type="text" id="title" name="title"
                       class="w-full px-3 py-2 bg-white-20 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">

                <div class="mt-1 text-red-600 italic">
                    @error('title')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <!-- Salary -->
            <div class="mb-5">
                <label for="salary" class="block text-sm font-medium text-black-700 mb-2">Salary</label>
                <input type="text" id="salary" name="salary"
                       class="w-full px-3 py-2 bg-white-20 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <div class="mt-1 text-red-600 italic">
                    @error('salary')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <!-- Submit and Cancel buttons -->
            <div class="flex justify-end gap-4">
                <a href="/jobs/all" class="text-gray-700 hover:text-gray-900">Cancel</a>
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-md font-semibold text-white">
                    Create Job
                </button>
            </div>


            {{--            <div class="mt-10">--}}
            {{--                @if($errors->any())--}}
            {{--                    <ul>--}}
            {{--                        @foreach($errors->all() as $error)--}}
            {{--                            <li class="text-red-500 italic">{{$error}}</li>--}}
            {{--                        @endforeach--}}
            {{--                    </ul>--}}
            {{--                @endif--}}
            {{--            </div>--}}
        </form>
    </div>

</x-layout>
