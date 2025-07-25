@php
    $classes =
        'hover:text-brand-green-500 font-bold block p-2 text-neutral-50 transition-all duration-300 hover:bg-neutral-50/15 hover:px-4 active:bg-neutral-50/25';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
