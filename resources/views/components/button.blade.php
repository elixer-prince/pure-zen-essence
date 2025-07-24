@props(['type' => 'a'])

@php
    $classes = 'flex w-fit items-center gap-2 rounded-md px-4 py-2 font-bold transition-colors duration-300';
@endphp

@if ($type === 'a')
    <a {{ $attributes(['class' => $classes, 'href' => $href ?? null]) }}>
        {{ $slot }}
    </a>
@elseif ($type === 'button')
    @php
        $classes .= ' cursor-pointer';
    @endphp

    <button {{ $attributes(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
