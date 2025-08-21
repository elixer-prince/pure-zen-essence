@props(["type" => "text"])

@php
    $classes =
        "text-lg-paragraph focus-visible:border-brand-green-500 rounded-lg border-2 bg-black/75 p-4 outline-none placeholder:text-neutral-50/75 placeholder:italic";
@endphp

<input
    {{ $attributes(["class" => $classes, "type" => $type]) }}
/>
