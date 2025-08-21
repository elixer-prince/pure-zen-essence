@php
    $classes = "group/logo flex items-center gap-2";
@endphp

<a
    {{ $attributes(["class" => $classes, "href" => $href, "title" => "Pure Zen Essence"]) }}
>
    <x-brand-icon />

    <span
        class="text-brand-green-600 text-lg-subtitle hidden font-bold italic transition-transform duration-500 group-hover/logo:-translate-y-0.5 sm:flex"
    >
        Pure Zen Essence
    </span>
</a>
