<x-layouts.dashboard>
    <x-slot name="pageTitle">Pure Zen Essence | Dashboard</x-slot>
    <x-slot name="pageDescription">
        This is the dashboard of the Pure Zen Essence website.
    </x-slot>

    <h1 class="mb-4 text-2xl font-bold">
        Hello, {{ $admin->first_name }}
    </h1>

    <p>Welcome to the dashboard...</p>
</x-layouts.dashboard>
