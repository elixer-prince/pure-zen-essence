<x-layouts.app>
    <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>
    <x-slot name="pageDescription">{{ $pageDescription }}</x-slot>

    <main>
        {{ $slot }}
    </main>
</x-layouts.app>
