@php
    $classes =
        'group border-brand-green-500 rounded-lg border-l-6 bg-neutral-900 p-8 transition-transform duration-500 hover:-translate-y-1';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    <h3 class="group-hover:text-brand-blue-50 mb-2 text-2xl font-bold text-neutral-300 transition-colors duration-500">
        {{ $heading }}
    </h3>
    <p class="text-neutral-400">
        {{ $slot }}
    </p>
</div>
