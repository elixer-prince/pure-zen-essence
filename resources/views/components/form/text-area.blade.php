@php
    $classes =
        "w-full resize-none rounded-md border-2 border-neutral-400 px-4 py-3 outline-none";
@endphp

<textarea {{ $attributes(["class" => $classes, "id", "name"]) }}>
{{ $slot }}</textarea
>
