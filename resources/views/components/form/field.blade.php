@php
    $classes = "flex flex-col gap-2";
@endphp

<div {{ $attributes(["class" => $classes]) }}>
    {{ $slot }}
</div>
