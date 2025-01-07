<x-layout>
    @if ($job === null)
        <div class="bg-red-100 p-4 rounded-b">
            Sorry, this job doesn't exist.
        </div>
    @else
        <div>
            {{ $job['name'] }}
        </div>
    @endif
</x-layout>