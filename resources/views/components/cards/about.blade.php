@php
    $classes =
        "group border-brand-green-500 bg-brand-green-900 rounded-lg border-l-6 p-8 transition-transform duration-500 hover:-translate-y-1";
@endphp

<div {{ $attributes(["class" => $classes]) }}>
    <h3
        class="text-h4 mb-2 font-bold text-neutral-50 transition-colors duration-500"
    >
        {{ $heading }}
    </h3>
    <p class="text-brand-green-100">
        {{ $slot }}
    </p>
</div>
