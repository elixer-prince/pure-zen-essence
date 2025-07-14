@php
  $classes =
    'hover:text-brand-green-500 inline-block p-2 transition-all duration-300 first:pl-4 last:pr-4 hover:bg-white/15 hover:px-4';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</a>
