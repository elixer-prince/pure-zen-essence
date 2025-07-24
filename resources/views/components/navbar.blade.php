<nav
    class="fixed shadow top-0 right-0 left-0 z-10 flex h-[var(--navbar-height)] items-center justify-between sm:bg-black/95 bg-black backdrop-blur-sm p-8">
    <div class="flex items-center gap-8">
        <x-brand-logo />

        <ul
            class="border-brand-green-50 hidden items-center overflow-hidden rounded-md border-2 lg:flex [&>li:first-child>a]:pl-4 [&>li:last-child>a]:pr-4">
            <li><x-navbar-link href="#">HOME</x-navbar-link></li>
            <li><x-navbar-link href="#about">ABOUT US</x-navbar-link></li>
            <li><x-navbar-link href="#products">OUR PRODUCTS</x-navbar-link></li>
            <li><x-navbar-link href="#testimonials">TESTIMONIALS</x-navbar-link></li>
            <li><x-navbar-link href="#faqs">FAQs</x-navbar-link></li>
        </ul>
    </div>

    <div class="flex items-center gap-4">
        <a class="text-neutral-50 transition-colors duration-300 hover:text-brand-green-200" href="/login">Log In</a>
        <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" href="/signup">
            <i class="fa-solid fa-user"></i>
            Sign Up
        </x-button>
    </div>
</nav>
