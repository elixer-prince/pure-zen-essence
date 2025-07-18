@php
  $classes = 'mb-8 w-fit rounded-lg border-b-8 border-neutral-500 pb-2 text-center text-4xl font-bold';
@endphp

<header>
  <h2 {{ $attributes(['class' => $classes, 'id' => $id]) }}>
    {{ $slot }}
  </h2>
</header>
