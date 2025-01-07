<x-layout>
    @foreach ($jobs as $job)
    <div>
     {{ $job}}
    </div>
    @endforeach
</x-layout>