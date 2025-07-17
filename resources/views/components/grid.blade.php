@php
  $classes = 'grid w-full gap-10';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</div>
