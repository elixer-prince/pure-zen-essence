@php
    $classes = "flex flex-col gap-1";
@endphp

<div {{ $attributes(["class" => $classes]) }}>
    {{ $slot }}
</div>
