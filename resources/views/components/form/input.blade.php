@props(["type" => "text"])

@php
    $classes = "rounded-md border-2 border-neutral-400 px-4 py-3 outline-none";
@endphp

<input
    {{ $attributes(["class" => $classes, "type" => $type]) }}
/>
