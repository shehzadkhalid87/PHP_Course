<x-layout>
    <x-slot:heading>
        {{ $job ? $job['title'] : 'All jobs' }}
    </x-slot:heading>

    @if ($job)
        <div>
            <p><strong>Title:</strong> {{ $job['title'] }}</p>
            <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
            <div class="font-bold py-5 text-blue-600">
                {{ $job->employer->name }}
            </div>

            <a href="/jobs"
               class="inline-block mt-5 px-3 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                ← Back to All Jobs
            </a>
        </div>
    @else
        <div class="space-y-4">
            @foreach ($jobs as $item)
                <a href="/jobs/{{ $item->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-600">
                        {{ $item->employer->name }}
                    </div>
                    <strong>{{ $item->title }}</strong>: pays {{ $item->salary }} per year.
                </a>
            @endforeach

            <div class="mt-6 py-5">
                {{ $jobs->links() }}
            </div>
        </div>
    @endif
</x-layout>
