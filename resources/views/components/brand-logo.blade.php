@php
    $classes = "flex items-center gap-2";
@endphp

<a {{ $attributes(["class" => $classes, "href" => "/"]) }}>
    <x-brand-icon />

    <span
        class="text-brand-green-50 hidden text-2xl font-bold transition-transform duration-500 hover:-translate-y-0.5 sm:flex"
    >
        Pure Zen Essence
    </span>
</a>
