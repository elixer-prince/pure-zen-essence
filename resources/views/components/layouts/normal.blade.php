<x-layouts.app>
    <x-slot name="pageTitle">
        {{ $pageTitle }}
    </x-slot>
    <x-slot name="pageDescription">
        {{ $pageDescription }}
    </x-slot>

    <x-navbar />

    <main class="mt-[var(--navbar-height)]">
        {{ $slot }}
    </main>

    <x-footer />
</x-layouts.app>
