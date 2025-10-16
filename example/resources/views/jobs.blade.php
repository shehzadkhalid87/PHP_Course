<x-layout>
    <x-slot:heading>
        {{ $job ? $job['title'] : 'All Jobs' }}
    </x-slot:heading>

    @if ($job)
        {{-- Single job view --}}
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>This job pays {{ $job['salary'] }} per year.</p>

        <a href="/jobs" class="text-blue-500">← Back to all jobs</a>
    @else
        {{-- All jobs list --}}
        <ul>
            @foreach ($jobs as $job)
                <li>
                    <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 ">
                        <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>
