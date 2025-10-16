<x-layout>
    <x-slot:heading>
        {{ $job ? $job['title'] : 'All Jobs' }}
    </x-slot:heading>

    @if ($job)
        {{-- Single Job View --}}
        <div>
            <p><strong>Title:</strong> {{ $job['title'] }}</p>
            <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
            <a href="/jobs" class="text-blue-500 hover:underline">← Back to all jobs</a>
        </div>
    @else
        {{-- All Jobs View --}}
        <ul>
            @foreach ($jobs as $item)
                <li>
                    <a href="/jobs/{{ $item['id'] }}" class="text-blue-500 hover:underline">
                        <strong>{{ $item['title'] }}</strong>: pays {{ $item['salary'] }} per year.
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>

