@php
    $classes =
        "bg-brand-green-900 absolute top-0 left-1/2 flex aspect-square h-48 flex-1 -translate-x-1/2 -translate-y-1/2 overflow-hidden rounded-full border-4 border-neutral-50 transition-all duration-500 lg:static lg:h-full lg:translate-x-0 lg:-translate-y-0";
@endphp

<div {{ $attributes(["class" => $classes]) }}>
    <img
        class="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
        src="{{ asset("images/placeholder-image.svg") }}"
        alt="Owners Image"
    />
</div>
