<x-layout>
    <x-slot:heading>
        {{ $job ? $job['title'] : 'All jobs' }}
    </x-slot:heading>

    @if ($job)
        <div class="mt-6 px-10">
            <p><strong>Title:</strong> {{ $job['title'] }}</p>
            <p><strong>Salary:</strong> {{ $job['salary'] }}</p>

            <div class="font-bold py-5 text-blue-600">
                {{ $job->employer->name }}
            </div>

            {{-- Back and Edit Buttons --}}
            <div class="flex justify-between items-center mb-6">
                <a href="/jobs"
                   class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-500 hover:text-black transition">
                    ← Back
                </a>
            </div>

        </div>
    @else
        <div class="space-y-4">
            @foreach ($jobs as $item)
                <div class="relative block px-4 py-6 border border-gray-200 rounded-lg overflow-hidden">
                    <a href="/jobs/{{ $item->id }}" class="absolute inset-0 z-0"></a>

                    <div class="relative z-10">
                        <div class="font-bold text-blue-600">
                            {{ $item->employer->name }}
                        </div>
                        <strong>{{ $item->title }}</strong>: pays {{ $item->salary }} per year.

                        {{-- Action Buttons --}}
                        <div class="absolute bottom-3 right-3 flex gap-3 z-20">
                            {{-- Edit --}}
                            <a href="/jobs/{{ $item->id }}/edit"
                               class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-500 transition">
                                Edit
                            </a>

                            {{-- Delete --}}
                            <form action="/jobs/{{ $item->id }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this job?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-5 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-500 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-6 py-5">
                {{ $jobs->links() }}
            </div>
        </div>

    @endif
</x-layout>
