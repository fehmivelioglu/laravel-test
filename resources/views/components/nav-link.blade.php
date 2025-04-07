@props(['active' => false])

<a class="nav-link  {{ $active ? 'text-success' : '' }}" {{ $attributes }}>{{ $slot }}</a>
