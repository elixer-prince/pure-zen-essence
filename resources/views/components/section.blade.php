@php
    $classes = 'flex scroll-mt-[var(--navbar-height)] flex-col items-center justify-center';
@endphp

<section {{ $attributes(['class' => $classes, 'id', 'aria-labelledby']) }}>
    {{ $slot }}
</section>
