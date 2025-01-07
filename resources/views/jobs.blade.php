<x-layout >
    <div class="overflow-y-auto">
        <table class="table-auto w-2/3 mx-auto rounded-lg overflow-hidden shadow-md">
            <thead class="bg-gray-100">
                <tr>
                    @foreach(['No.', 'Name', 'Employeer', 'Salary'] as $header)
                    <th class="px-4 py-2 cursor-pointer">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody id="job-list">
                @foreach ($jobs as $job)
                <tr onclick="window.location.href='/jobs/{{ $job->id }}'">
                    <td class="border px-4 py-2">{{ ($jobs->currentPage() - 1) * $jobs->perPage() + $loop->index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $job->name }}</td>
                    <td class="border px-4 py-2">{{ $job->employeer->name }}</td>
                    <td class="border px-4 py-2">{{ $job->salary }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>