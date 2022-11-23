@props (['active' => false])

@php
$classes = 'block text-sm px-3 text-left leading-6 hover:bg-gray-300 focus:bg-gray-300';

if ($active) $classes .= ' bg-gray-300'

@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
