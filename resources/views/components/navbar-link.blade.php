@php
  $classes =
    'block p-2 transition-all duration-300 hover:bg-white/15 hover:px-4 hover:text-neutral-500 active:bg-white/25';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</a>
