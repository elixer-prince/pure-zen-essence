@php
    $classes =
        'border-brand-green-50 hidden items-center overflow-hidden rounded-md border-2 lg:flex [&>li:first-child>a]:pl-4 [&>li:last-child>a]:pr-4';
@endphp

{{-- Navbar Link Container --}}
<ul class="{{ $classes }}">
    {{-- First-Time Visitor Links --}}
    @guest
        <li><x-navbar.link href="#">HOME</x-navbar.link></li>
        <li><x-navbar.link href="#about">ABOUT US</x-navbar.link></li>
        <li><x-navbar.link href="#products">OUR PRODUCTS</x-navbar.link></li>
        <li><x-navbar.link href="#testimonials">TESTIMONIALS</x-navbar.link></li>
        <li><x-navbar.link href="#faqs">FAQs</x-navbar.link></li>
    @endguest

    {{-- Authenticated User Links --}}
    @auth
        <li><x-navbar.link>All Products</x-navbar.link></li>
        <li><x-navbar.link>Products</x-navbar.link></li>
    @endauth
</ul>
