<x-layouts.layout>
  <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>
  <x-slot name="pageDescription">{{ $pageDescription }}</x-slot>

  <x-hero-section />

  <main>
    {{ $slot }}
  </main>
</x-layouts.layout>
