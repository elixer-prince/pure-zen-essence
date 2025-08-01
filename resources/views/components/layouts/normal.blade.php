<x-layouts.app>
    <x-slot:page-title>
        {{ $pageTitle }}
    </x-slot:page-title>
    <x-slot:page-description>
        {{ $pageDescription }}
    </x-slot:page-description>

    <x-navbar />

    <main class="mt-[var(--navbar-height)]">
        {{ $slot }}
    </main>

    <x-footer />
</x-layouts.app>
