@php
    $classes = 'font-bold';
@endphp

<label {{ $attributes(['class' => $classes, 'for' => $for]) }}>{{ $slot }}</label>
