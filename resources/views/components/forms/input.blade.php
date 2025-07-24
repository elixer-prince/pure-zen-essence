@props(['type' => 'text'])

@php
    $classes = 'w-full rounded-md border-2 border-neutral-400 px-4 py-3 outline-none';
@endphp

<input {{ $attributes(['class' => $classes, 'type' => $type]) }} />
