<nav class="fixed p-8 top-0 left-0 w-70 justify-center bg-black text-white bottom-0">
    <a class="font-bold flex text-2xl flex-col items-center" href="/dashboard">
        <x-brand-icon class="my-4" />
        My Dashboard
    </a>

    <hr class="text-neutral-500/50 mt-8 mb-4 border-1">

    <ul class="flex flex-col">
        <li>
            <x-navbar.link class="rounded-md" href="/">
                <i class="fa-solid rotate-270 fa-arrow-up-from-bracket"></i>
                Landing Page
            </x-navbar.link>
        </li>

        <li>
            <x-navbar.link class="rounded-md" href="/dashboard" wire:navigate>
                Overview
            </x-navbar.link>
        </li>
        <li>
            <x-navbar.link class="rounded-md" href="/dashboard/products" wire:navigate>
                All Products
            </x-navbar.link>
        </li>
    </ul>
</nav>
