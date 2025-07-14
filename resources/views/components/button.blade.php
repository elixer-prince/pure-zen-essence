@php
  $classes = 'flex items-center gap-2 rounded-md px-4 py-2 font-bold text-white transition-colors duration-500';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</a>
