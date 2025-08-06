<ul
    @click="navIsOpen = false"
    :class="{ 'opacity-100!': navIsOpen }"
    class="border-brand-green-500/50 mt-4 flex h-[75%] flex-col justify-evenly border-t-8 px-8 pt-4 text-center text-xl opacity-0 transition-opacity duration-500"
>
    <x-navbar.link class="rounded-md" href="#">HOME</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#about">ABOUT US</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#products">
        OUR PRODUCTS
    </x-navbar.link>
    <x-navbar.link class="rounded-md" href="#testimonials">
        TESTIMONIALS
    </x-navbar.link>
    <x-navbar.link class="rounded-md" href="#faqs">FAQs</x-navbar.link>
</ul>
