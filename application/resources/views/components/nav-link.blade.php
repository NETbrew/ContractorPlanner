@props(['active'])

@php
$classes =  ($active ?? false)
    ? 'inline-flex items-center px-3 py-5 text-1xl font-medium leading-5 text-blue-500'
    :  'inline-flex items-center my-3 px-3 py-5 text-1xl font-medium leading-5 text-white bg-blue-500 border-2 rounded border-blue-500 transition duration-150 ease-in-out
       hover:text-blue-500 hover:bg-white';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
