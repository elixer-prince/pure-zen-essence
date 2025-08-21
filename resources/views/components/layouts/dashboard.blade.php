<x-layouts.app>
    <x-slot name="pageTitle">
        {{ $pageTitle }}
    </x-slot>
    <x-slot name="pageDescription">
        {{ $pageDescription }}
    </x-slot>

    <x-sidebar />

    <main class="ml-[17.5rem]">
        {{ $slot }}
    </main>
</x-layouts.app>
