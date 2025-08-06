@php
    $classes = "fixed top-0 right-0 left-0 z-10 flex h-[var(--navbar-height)] flex-col overflow-hidden bg-black p-8 shadow backdrop-blur-sm transition-all duration-500 select-none sm:bg-black/95";
@endphp

{{--
    navIsOpen is defined on the <body> so that overflow can be
    hidden when the navbar is open.
--}}

{{-- Navbar --}}
<nav
    :class="{ 'h-screen sm:h-[var(--navbar-height)]': navIsOpen }"
    class="{{ $classes }}"
    role="navigation"
>
    {{-- main container --}}
    <div class="-mt-4.5 flex w-full items-center justify-between self-start">
        {{-- inner left container --}}
        <div class="flex items-center gap-8">
            <x-brand-logo />

            <x-navbar.link-container />
        </div>

        {{-- inner right container --}}
        <div class="flex items-center gap-4">
            <div class="hidden items-center gap-4 sm:flex">
                @guest("web")
                    @guest("admin")
                        <x-navbar.guest-auth-links />
                    @endguest
                @endguest

                @auth("web")
                    <x-navbar.logout-button />
                @endauth

                @auth("admin")
                    <x-navbar.admin.logout-button />
                    <x-navbar.admin.view-dashboard-button />
                @endauth
            </div>

            {{-- navbar toggle icons --}}
            <div class="cursor-pointer text-2xl text-neutral-50 sm:hidden">
                <x-navbar.open-button />

                <x-navbar.close-button />
            </div>
        </div>
    </div>

    {{-- mobile navbar content --}}
    <div class="h-full">
        @if (request()->is("/"))
            <x-navbar.mobile-link-container />
        @endif

        <x-navbar.footer />
    </div>
</nav>
