<x-layout>
    <x-slot name="title">
        Ana Sayfa
    </x-slot>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }} : {{ $job['location'] }}</a>
        </li>

        @endforeach @dump(get_defined_vars())
    </ul>
    <div>
        {{ $jobs->links() }}
    </div>

    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>
</x-layout>
