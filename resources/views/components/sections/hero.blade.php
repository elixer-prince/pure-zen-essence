<header
    class="mt-[var(--navbar-height)] flex justify-center gap-16 px-12 pt-14 pb-38 sm:pt-24 md:px-16 lg:items-center lg:py-24"
>
    <x-navbar />

    <div class="flex flex-[1.5] flex-col items-center gap-12 text-center">
        <div class="flex flex-col items-center gap-8">
            <h1 class="cta-content text-4xl font-bold uppercase xl:text-5xl">
                Have you ever wanted to be effortlessly
                <span class="bg-brand-green-500 bg-clip-text text-transparent">
                    beautiful
                </span>
            </h1>
            <p class="cta-content text-2xl">
                Find your natural essence with
                <span
                    class="hover:text-brand-green-500 font-black transition-colors duration-500"
                >
                    Pure Zen Essence
                </span>
            </p>
        </div>

        <div class="cta-content flex items-center gap-4">
            <x-button
                as="a"
                class="bg-neutral-950 text-neutral-50 hover:bg-neutral-800"
                href="#about"
            >
                Learn More
                <span class="hidden sm:inline">
                    <i class="fa-solid fa-arrow-down"></i>
                </span>
            </x-button>
            <x-button
                as="a"
                class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
                href="#contact"
            >
                Contact Us
                <span class="hidden sm:inline">
                    <i class="fa-solid fa-paper-plane"></i>
                </span>
            </x-button>
        </div>
    </div>

    <div
        id="hero-image"
        class="outline-brand-green-500 mr-20 hidden aspect-square max-w-90 flex-1 overflow-hidden rounded-lg outline-4 transition-all duration-1000 hover:-translate-y-1 lg:block"
    >
        <img
            class="h-full w-full"
            src="https://picsum.photos/300/300"
            alt="A beautiful woman"
        />
    </div>
</header>
