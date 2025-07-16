@php
  $classes = 'grid w-full gap-10 lg:grid-cols-3';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</div>
