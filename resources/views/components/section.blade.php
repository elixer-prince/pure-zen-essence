@php
  $classes = 'flex scroll-mt-[var(--navbar-height)] flex-col items-center justify-center px-8 py-16 sm:px-12';
@endphp

<section
  {{ $attributes(['class' => $classes, 'id' => $id, 'aria-labelledby' => $ariaLabelledby]) }}
>
  {{ $slot }}
</section>
