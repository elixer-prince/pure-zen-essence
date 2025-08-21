@php
    $classes = "navbar__link-container mt-1 hidden items-center overflow-hidden lg:flex [&>li:first-child>a]:pl-4 [&>li:last-child>a]:pr-4";

    if (request()->is("products")) {
        $classes .= " border-none!";
    }
@endphp

<ul class="{{ $classes }}">
    {{-- First-Time Visitor Links --}}
    @guest
        <li>
            <x-navigation.navbar.link href="#" title="Home">
                HOME
            </x-navigation.navbar.link>
        </li>
        <li>
            <x-navigation.navbar.link href="#about" title="About Us">
                ABOUT US
            </x-navigation.navbar.link>
        </li>
        <li>
            <x-navigation.navbar.link href="#products" title="Our Products">
                OUR PRODUCTS
            </x-navigation.navbar.link>
        </li>
        <li>
            <x-navigation.navbar.link href="#testimonials" title="Testimonials">
                TESTIMONIALS
            </x-navigation.navbar.link>
        </li>
        <li>
            <x-navigation.navbar.link href="#faqs" title="FAQs">
                FAQs
            </x-navigation.navbar.link>
        </li>
    @endguest

    {{-- Authenticated User Links --}}
    {{--
        @auth
        <li><x-navigation.navbar.link>All Products</x-navigation.navbar.link></li>
        <li><x-navigation.navbar.link>Products</x-navigation.navbar.link></li>
        @endauth
    --}}
</ul>
