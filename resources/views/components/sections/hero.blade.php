<header
    class="header relative mt-[var(--navbar-height)] bg-gradient-to-r bg-[url('https://images.unsplash.com/photo-1533038590840-1cde6e668a91?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] from-black to-black bg-cover bg-fixed bg-center bg-no-repeat px-3 pt-10 pb-32 bg-blend-multiply md:px-10 lg:px-39 lg:py-22"
>
    <div
        class="header__gradient absolute inset-0 bg-gradient-to-r from-black/75 to-black/75"
    ></div>

    <div
        class="header__left-container z-20 flex flex-col items-center gap-12 text-neutral-50 lg:items-start"
    >
        <div
            class="header__cta-text text-h3 md:text-lg-h2/16 flex max-w-195 flex-col items-center gap-8 text-center font-bold lg:text-start"
        >
            <h1 class="cta-content">
                Have you ever wanted to be
                <em
                    class="decoration-brand-green-500 underline decoration-8 underline-offset-8"
                >
                    effortlessly
                </em>
                beautiful?
            </h1>
            <p class="cta-content">
                Discover your natural essence with
                <em class="text-brand-green-500 transition-colors duration-500">
                    Pure Zen Essence!
                </em>
            </p>
        </div>

        <div class="cta-content flex items-center gap-4">
            <x-button
                as="a"
                class="bg-brand-green-400 text-brand-green-950 hover:bg-brand-green-600"
                href="#contact"
            >
                Contact Us
            </x-button>
            <x-button
                as="a"
                class="border-2 bg-black/25 text-neutral-50 hover:bg-black/50"
                href="#about"
            >
                About Us
            </x-button>
        </div>
    </div>

    <div
        class="header__product-image absolute right-33 -bottom-25 z-20 hidden lg:block"
    >
        <img
            src="{{ asset("images/product-bottle-shot.png") }}"
            alt="Flagship Product Image"
        />
    </div>
</header>
