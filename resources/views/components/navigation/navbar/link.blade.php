@props([
    "title",
])

@php
    $classes =
        "text-brand-green-700 hover:bg-brand-green-400/25 hover:border-b-brand-green-800 block rounded-lg border-y-4 border-transparent p-2 font-bold text-black transition-all duration-300 hover:px-4";
@endphp

<a {{ $attributes(["class" => $classes, "title" => $title]) }}>
    {{ $slot }}
</a>
