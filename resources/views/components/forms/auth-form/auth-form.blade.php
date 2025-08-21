@props(["method" => "POST"])

@php
    $classes = "flex flex-col w-full";
    $method = strtoupper($method);
@endphp

<form {{ $attributes(["class" => $classes, "method" => "POST"]) }}>
    @csrf

    @if ($method)
        @method($method)
    @endif

    {{ $slot }}
</form>
