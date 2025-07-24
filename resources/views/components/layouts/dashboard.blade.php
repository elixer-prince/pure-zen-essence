<x-layouts.app>
    <x-slot:page-title>
        {{ $pageTitle }}
    </x-slot:page-title>
    <x-slot:page-description>
        {{ $pageDescription }}
    </x-slot:page-description>

    <x-sidebar />

    <main class="ml-[17.5rem]">
        {{ $slot }}
    </main>
</x-layouts.app>
