@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1  text-1xl font-medium leading-5 text-gray-900 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 text-1xl font-medium leading-5 text-gray-900  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
