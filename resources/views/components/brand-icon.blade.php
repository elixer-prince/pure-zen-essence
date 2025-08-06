@php
    $image = asset("images/brand-icon.png");
@endphp

<img
    {{ $attributes(["class" => "w-12 animate-bounce", "src" => $image, "alt" => "Brand Icon"]) }}
/>
