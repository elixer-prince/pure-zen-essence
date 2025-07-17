@php
  $classes =
    'hover:text-brand-green-500 block p-2 transition-all duration-300 hover:bg-white/15 hover:px-4 active:bg-white/25';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</a>
