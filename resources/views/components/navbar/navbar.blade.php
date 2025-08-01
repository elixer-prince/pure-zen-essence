@php
    $classes =
        'fixed flex flex-col overflow-hidden shadow top-0 right-0 transition-all duration-500 select-none left-0 z-10  h-[var(--navbar-height)] sm:bg-black/95 bg-black backdrop-blur-sm p-8';
@endphp

{{--
    ? navIsOpen is defined on the <body> so that overflow can be
    ? hidden when the navbar is open.
--}}

{{-- * Navbar --}}
<nav :class="{ 'h-screen sm:h-[var(--navbar-height)]': navIsOpen }" class="{{ $classes }}" role="navigation">
    {{-- main container --}}
    <div class="flex items-center self-start -mt-4.5 w-full justify-between">
        {{-- inner left container --}}
        <div class="flex items-center gap-8">
            <x-brand-logo />

            <x-navbar.link-container />
        </div>

        {{-- inner right container --}}
        <div class="flex items-center gap-4">
            <div class="items-center gap-4 hidden sm:flex">
                @guest
                    <a class="text-neutral-50 font-bold transition-colors duration-300 hover:text-brand-green-200"
                        href="/login" wire:navigate>
                        Log In
                    </a>

                    <x-button as="a" class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
                        href="/register" wire:navigate>
                        <i class="fa-solid fa-user"></i>

                        Register
                    </x-button>
                @endguest

                @auth
                    <x-form action="/session" method="DELETE">
                        <button
                            class="hover:text-red-300/75 cursor-pointer text-neutral-50 transition-colors duration-300 font-bold"
                            type="submit">

                            Log Out
                        </button>
                    </x-form>

                    {{-- view dashboard link --}}
                    <x-button as="a"
                        class="bg-brand-darkblue-900 text-brand-darkblue-50 hover:bg-brand-darkblue-800"
                        href="/admin/dashboard" wire:navigate>
                        <i class="fa-solid fa-user-tie"></i>

                        View Dashboard
                    </x-button>
                @endauth
            </div>

            {{-- mobile navbar toggle icons --}}
            <div class="text-neutral-50 text-2xl sm:hidden cursor-pointer">
                {{-- open button --}}
                <div @click="navIsOpen = true" :class="{ 'hidden!': navIsOpen }" class="active:text-brand-green-400"
                    role="button">
                    <i class="fa-solid fa-bars"></i>
                </div>

                {{-- close button --}}
                <div @click="navIsOpen = false" :class="{ 'block!': navIsOpen }" class="hidden active:text-red-400"
                    role="button">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- mobile links container --}}
    <ul @click="navIsOpen = false" :class="{ 'opacity-100!': navIsOpen }"
        class="transition-opacity text-xl text-center border-t-8 flex flex-col border-brand-green-500/50 mt-4 px-8 pt-4 justify-evenly duration-500 h-[75%] opacity-0">
        <x-navbar.link class="rounded-md" href="#">HOME</x-navbar.link>
        <x-navbar.link class="rounded-md" href="#about">ABOUT US</x-navbar.link>
        <x-navbar.link class="rounded-md" href="#products">OUR PRODUCTS</x-navbar.link>
        <x-navbar.link class="rounded-md" href="#testimonials">TESTIMONIALS</x-navbar.link>
        <x-navbar.link class="rounded-md" href="#faqs">FAQs</x-navbar.link>
    </ul>

    {{-- mobile navbar footer --}}
    <footer>
        <div class="text-center text-neutral-50/75 text-sm mt-auto">
            <p>Copyright &copy; {{ date('Y') }} Pure Zen Essence. </p>
            <p>All rights reserved.</p>
        </div>
    </footer>
</nav>
