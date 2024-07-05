@props([
    'active'
])

@php
    $classes = $active ?? false
        ? 'text-[#2A7F62] scale-105 transition ease-in-out delay-150'
        : 'text-black hover:scale-105';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <span class="text-lg font-semibold">
            {{ $slot }}
        </span>
    </a>
</li>
