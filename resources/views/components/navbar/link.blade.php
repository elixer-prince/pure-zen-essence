@php
    $classes =
        "hover:text-brand-green-500 block p-2 font-bold text-neutral-50 transition-all duration-300 hover:bg-neutral-50/15 hover:px-4 active:bg-neutral-50/25";
@endphp

<a {{ $attributes(["class" => $classes]) }}>
    {{ $slot }}
</a>
