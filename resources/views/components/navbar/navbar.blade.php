@php
    $classes =
        'fixed flex flex-col overflow-hidden shadow top-0 right-0 transition-all duration-500 select-none left-0 z-10  h-[var(--navbar-height)] sm:bg-black/95 bg-black backdrop-blur-sm p-8';
@endphp

{{--
    navIsOpen is defined on the <body> so that overflow can be
    hidden when the navbar is open.
--}}

{{-- Navbar --}}
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
                @guest('web')
                    @guest('admin')
                        <x-navbar.guest-auth-links />
                    @endguest
                @endguest

                @auth('web')
                    <x-navbar.logout-button />
                @endauth

                @auth('admin')
                    <x-navbar.admin.logout-button />
                    <x-navbar.admin.view-dashboard-button />
                @endauth
            </div>

            {{-- navbar toggle icons --}}
            <div class="text-neutral-50 text-2xl sm:hidden cursor-pointer">
                <x-navbar.open-button />

                <x-navbar.close-button />
            </div>
        </div>
    </div>

    {{-- mobile navbar content --}}
    <div class="h-full">
        @if (request()->is('/'))
            <x-navbar.mobile-link-container />
        @endif

        <x-navbar.footer />
    </div>
</nav>
