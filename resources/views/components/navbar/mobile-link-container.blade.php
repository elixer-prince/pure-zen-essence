<ul @click="navIsOpen = false" :class="{ 'opacity-100!': navIsOpen }"
    class="transition-opacity text-xl text-center border-t-8 flex flex-col border-brand-green-500/50 mt-4 px-8 pt-4 justify-evenly duration-500 h-[75%] opacity-0">
    <x-navbar.link class="rounded-md" href="#">HOME</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#about">ABOUT US</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#products">OUR PRODUCTS</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#testimonials">TESTIMONIALS</x-navbar.link>
    <x-navbar.link class="rounded-md" href="#faqs">FAQs</x-navbar.link>
</ul>
