@php
    $classes =
        'fixed shadow top-0 right-0 select-none left-0 z-10 flex h-[var(--navbar-height)] items-center justify-between sm:bg-black/95 bg-black backdrop-blur-sm p-8';
@endphp

{{-- Navbar --}}
<nav class="{{ $classes }}">
    <div class="flex items-center gap-8">
        <x-brand-logo />

        <x-navbar.link-container />
    </div>

    <div class="flex items-center gap-4">
        @guest
            <a class="text-neutral-50 font-bold transition-colors duration-300 hover:text-brand-green-200" href="/login"
                wire:navigate>
                Log In
            </a>

            <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" href="/register" wire:navigate>
                <i class="fa-solid fa-user"></i>
                Register
            </x-button>
        @endguest

        @auth
            <x-form action="/session" method="DELETE">
                <button class="hover:text-red-300 cursor-pointer text-red-50 transition-colors duration-300 font-bold">
                    Log Out
                </button>
            </x-form>

            <x-button class="bg-brand-darkblue-900 text-brand-darkblue-50 hover:bg-brand-darkblue-800" href="/dashboard"
                wire:navigate>
                <i class="fa-solid fa-user-tie"></i>
                Dashboard
            </x-button>

            <div class="outline-neutral-50 bg-neutral-800 outline-2 rounded-full w-14 overflow-hidden aspect-square">
                <img class="w-full h-full" src="https://picsum.photos/30/30" alt="Profile Photo">
            </div>
        @endauth
    </div>
</nav>
