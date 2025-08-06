<nav
    class="fixed top-0 bottom-0 left-0 z-10 w-70 justify-center bg-black p-8 text-white"
>
    <a
        class="flex flex-col items-center text-2xl font-bold"
        href="/admin/dashboard"
    >
        <x-brand-icon class="my-4" />
        My Dashboard
    </a>

    <hr class="mt-8 mb-4 border-1 text-neutral-500/50" />

    <ul class="flex flex-col">
        <li>
            <x-navbar.link class="rounded-md" href="/">
                <i class="fa-solid fa-arrow-up-from-bracket rotate-270"></i>
                Landing Page
            </x-navbar.link>
        </li>

        <li>
            <x-navbar.link
                class="rounded-md"
                href="/admin/dashboard"
                wire:navigate
            >
                Overview
            </x-navbar.link>
        </li>
        <li>
            <x-navbar.link
                class="rounded-md"
                href="/admin/dashboard/products"
                wire:navigate
            >
                All Products
            </x-navbar.link>
        </li>
    </ul>
</nav>
