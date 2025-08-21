<ul
    @click="navIsOpen = false"
    :class="{ 'opacity-100!': navIsOpen }"
    class="border-brand-green-500/50 mt-4 flex h-[75%] flex-col justify-evenly border-t-8 px-8 pt-4 text-center text-xl opacity-0 transition-opacity duration-500"
>
    <x-navigation.navbar.link class="rounded-md" href="#" title="Home">
        HOME
    </x-navigation.navbar.link>
    <x-navigation.navbar.link class="rounded-md" href="#about" title="About Us">
        ABOUT US
    </x-navigation.navbar.link>
    <x-navigation.navbar.link
        class="rounded-md"
        href="#products"
        title="Our Products"
    >
        OUR PRODUCTS
    </x-navigation.navbar.link>
    <x-navigation.navbar.link
        class="rounded-md"
        href="#testimonials"
        title="Testimonials"
    >
        TESTIMONIALS
    </x-navigation.navbar.link>
    <x-navigation.navbar.link class="rounded-md" href="#faqs" title="FAQs">
        FAQs
    </x-navigation.navbar.link>
</ul>
