@php
    $classes = 'flex gap-1 flex-col';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
