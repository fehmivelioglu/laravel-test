@include('components.layout-min')

<x-layout>
    
    <x-slot name="title">
        Ana Sayfa
    </x-slot>

    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

</x-layout>
