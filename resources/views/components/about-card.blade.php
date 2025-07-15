@php
  $classes = 'border-brand-green-500 group rounded-lg border-l-6 bg-neutral-950 p-8';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  <h3 class="group-hover:text-brand-blue-500 mb-2 text-2xl font-bold transition-colors duration-500">
    {{ $heading }}
  </h3>
  <p class="text-white/75">
    {{ $slot }}
  </p>
</div>
