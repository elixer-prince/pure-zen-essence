@props(['method' => 'POST'])

@php
    $classes = 'flex flex-col gap-4';
    $method = strtoupper($method);
@endphp

<form {{ $attributes(['class' => $classes, 'method' => 'POST']) }}>
    @csrf

    @if ($method)
        @method($method)
    @endif

    {{ $slot }}
</form>
