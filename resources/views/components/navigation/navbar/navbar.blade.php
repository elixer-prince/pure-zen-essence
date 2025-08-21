@php
    $classes = "navbar fixed top-0 right-0 left-0 z-30 flex h-[var(--navbar-height)] flex-col overflow-hidden bg-neutral-50 p-8 shadow transition-all duration-500 select-none";
@endphp

{{--
    navIsOpen is defined on the <body> so that overflow can be
    hidden when the navbar is open.
--}}

<nav
    class="{{ $classes }}"
    :class="{ 'h-screen sm:h-[var(--navbar-height)]': navIsOpen }"
    role="navigation"
>
    <div
        class="navbar__main-container -mt-2.5 flex w-full items-center justify-between self-start"
    >
        <div class="navbar__inner-left-container flex items-center gap-8">
            <x-brand-logo href="/" />

            <x-navigation.navbar.link-container />
        </div>

        <div class="navbar__inner-right-container flex items-center gap-4">
            <div class="hidden items-center gap-4 sm:flex">
                @guest("web")
                    @guest("admin")
                        <x-navigation.navbar.guest-auth-links />
                    @endguest
                @endguest

                @auth("web")
                    <x-navigation.navbar.logout-button />
                @endauth

                @auth("admin")
                    <x-navigation.navbar.admin.logout-button />
                    <x-navigation.navbar.admin.view-dashboard-button />
                @endauth
            </div>

            <div
                class="navbar__toggle-icon-container cursor-pointer text-2xl text-neutral-50 sm:hidden"
            >
                <x-navigation.navbar.open-button />

                <x-navigation.navbar.close-button />
            </div>
        </div>
    </div>

    <div class="navbar__mobile-content hidden h-full">
        @if (request()->is("/"))
            <x-navigation.navbar.mobile-link-container />
        @endif

        <x-navigation.navbar.footer />
    </div>
</nav>
