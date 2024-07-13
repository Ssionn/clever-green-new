@props(['active'])

@php

$classes = ($active ?? false)
            ? 'flex items-center p-2 text-gray-900 rounded-lg bg-gray-200 group'
            : 'flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200 group';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
