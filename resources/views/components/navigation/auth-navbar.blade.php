@props([
    "href",
])

@php
    $classes =
        "fixed top-0 right-0 left-0 z-10 flex items-center justify-between bg-neutral-50 p-5 lg:px-39";
@endphp

<nav {{ $attributes(["class" => $classes]) }}>
    <x-brand-logo href="#" />

    <p
        class="text-lg-paragraph border-b-4 border-transparent font-bold transition-colors hover:border-neutral-950"
    >
        <a
            class="group/go-back flex items-baseline gap-1 transition-all hover:gap-2"
            href="/"
            wire:navigate
        >
            <i class="fa-solid fa-arrow-left mb-1"></i>
            <span>
                Back
                <span class="hidden md:inline-block">to</span>
                home
            </span>
        </a>
    </p>
</nav>
