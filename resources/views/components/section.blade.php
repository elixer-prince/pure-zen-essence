@php
    $classes = "flex scroll-mt-[var(--navbar-height)] flex-col items-center justify-center";
@endphp

<section
    {{ $attributes(["class" => $classes, "id" => $id, "aria-labelledby"]) }}
>
    {{ $slot }}
</section>
