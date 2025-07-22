<x-layouts.app>
    <x-slot:page-title>
        {{ $pageTitle }}
    </x-slot:page-title>
    <x-slot:page-description>
        {{ $pageDescription }}
    </x-slot:page-description>

    <main>
        {{ $slot }}
    </main>
</x-layouts.app>
