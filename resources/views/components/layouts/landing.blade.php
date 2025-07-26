<x-layouts.app>
    <x-slot:page-title>{{ $pageTitle }}</x-slot:page-title>
    <x-slot:page-description>{{ $pageDescription }}</x-slot:page-description>

    <x-hero-section />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</x-layouts.app>
