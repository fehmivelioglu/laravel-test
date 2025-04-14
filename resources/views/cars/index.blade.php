@include('components.layout-min')

@section('title', 'Index')

<h1>Index Page</h1>
<h2>Year is {{ $year }}</h2>

@if ($year == 2025)
    <h3>Year is 2025</h3>
@else
    <h3>Year is not 2025</h3>
@endif

@auth
    <h3>User is authenticated</h3>
@endauth

@guest
    <h3>User is not authenticated</h3>
@endguest
{{-- 
@foreach ($collection as $item)
    {{dd($loop)}}
@endforeach --}}

@include('components.button', ['slot' => 'Click me'])
