@props([
    "as" => "button",
    "href",
])

@php
    $classes =
        "flex w-fit cursor-pointer items-center gap-2 rounded-md px-4 py-2 font-bold transition-colors duration-300";
@endphp

@if ($as === "button")
    @php
        $classes .= " cursor-pointer";
    @endphp

    <button {{ $attributes(["class" => $classes]) }}>
        {{ $slot }}
    </button>
@elseif ($as === "a")
    <a {{ $attributes(["class" => $classes, "href" => $href]) }}>
        {{ $slot }}
    </a>
@endif
