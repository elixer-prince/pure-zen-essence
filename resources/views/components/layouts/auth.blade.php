<x-layouts.app>
    <x-slot name="pageTitle">
        {{ $pageTitle }}
    </x-slot>
    <x-slot name="pageDescription">
        {{ $pageDescription }}
    </x-slot>

    <x-navigation.auth-navbar />

    <main
        class="mt-(--navbar-height) min-h-[calc(100dvh-var(--navbar-height))] items-center justify-center"
    >
        {{ $slot }}
    </main>
</x-layouts.app>
