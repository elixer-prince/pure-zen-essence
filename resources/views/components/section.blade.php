@php
  $classes = 'flex scroll-mt-[var(--navbar-height)] items-center justify-center gap-16 px-8 py-16 sm:px-12';
@endphp

<section
  {{ $attributes(['class' => $classes, 'id' => $id, 'aria-labelledby' => $ariaLabelledby]) }}
>
  {{ $slot }}
</section>
