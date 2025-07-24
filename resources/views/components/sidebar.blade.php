<nav class="fixed p-8 top-0 left-0 w-70 justify-center bg-black text-white bottom-0">
    <a class="font-bold flex text-2xl flex-col items-center" href="/dashboard">
        <x-brand-icon />
        My Dashboard
    </a>

    <hr class="text-neutral-500/50 mt-4 mb-2 border-1">

    <ul class="">
        <li><x-navbar-link class="rounded-md" href="/">Home</x-navbar-link></li>
        <li><x-navbar-link class="rounded-md" href="/dashboard">Overview</x-navbar-link></li>
        <li><x-navbar-link class="rounded-md" href="/dashboard/products">All Products</x-navbar-link></li>
    </ul>
</nav>
