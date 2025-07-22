<x-layouts.app>
    <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>
    <x-slot name="pageDescription">{{ $pageDescription }}</x-slot>

    <x-hero-section />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</x-layouts.app>
