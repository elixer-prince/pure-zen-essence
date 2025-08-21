@php
    $classes = "text-lg-h2/18 text-center font-bold";
@endphp

<header>
    <h2 {{ $attributes(["class" => $classes, "id" => $id]) }}>
        {{ $slot }}
    </h2>
</header>
