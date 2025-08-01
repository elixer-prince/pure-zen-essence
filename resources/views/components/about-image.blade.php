@php
    $classes =
        'absolute top-0 left-1/2 flex aspect-square h-48 flex-1 -translate-x-1/2 -translate-y-1/2 overflow-hidden rounded-full border-4 lg:border-brand-blue-500 border-white bg-neutral-900 transition-all duration-500 lg:static lg:h-full lg:translate-x-0 lg:-translate-y-0';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
        src="https://picsum.photos/seed/{{ rand(1, 100000) }}/300/300" alt="Owners Image" />
</div>
