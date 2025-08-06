@php
    $classes = "grid gap-10";
@endphp

<div {{ $attributes(["class" => $classes]) }}>
    {{ $slot }}
</div>
