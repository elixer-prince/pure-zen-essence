@php
  $classes =
    'group rounded-lg border-l-6 border-neutral-500 bg-neutral-950 p-8 transition-transform duration-500 hover:-translate-y-1';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  <h3 class="mb-2 text-2xl font-bold transition-colors duration-500 group-hover:text-neutral-500">
    {{ $heading }}
  </h3>
  <p class="text-white/75">
    {{ $slot }}
  </p>
</div>
