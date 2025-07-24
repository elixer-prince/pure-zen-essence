<header
    class="mt-[var(--navbar-height)] lg:items-center flex justify-center gap-16 px-8 pt-14 pb-38 sm:pt-24 md:px-16 lg:py-24">
    <x-navbar />

    <div class="flex flex-[1.5] flex-col items-center gap-12 text-center">
        <div class="flex flex-col items-center gap-8">
            <h1 class="text-4xl cta-content font-bold uppercase xl:text-5xl">
                Have you ever wanted to be effortlessly
                <span class="bg-brand-green-500 bg-clip-text font-black text-transparent">beautiful</span>
            </h1>
            <p class="text-2xl cta-content">
                Find your natural essence with
                <span class="hover:text-brand-green-500 font-black transition-colors duration-500">
                    Pure Zen Essence
                </span>
            </p>
        </div>

        <div class="flex cta-content items-center gap-4">
            <x-button class="hover:bg-neutral-800 bg-neutral-950 text-neutral-50" href="#about">
                Learn More
                <span class="hidden sm:inline">
                    <i class="fa-solid fa-arrow-down"></i>
                </span>
            </x-button>
            <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" href="#contact">
                Contact Us
                <span class="hidden sm:inline">
                    <i class="fa-solid fa-paper-plane"></i>
                </span>
            </x-button>
        </div>
    </div>

    <div id="hero-image"
        class="hidden overflow-hidden mr-20 hover:-translate-y-1 duration-1000 max-w-90 outline-4 lg:block outline-brand-green-500 transition-all rounded-lg aspect-square flex-1">
        <img class="w-full h-full" src="https://picsum.photos/300/300" alt="A beautiful woman">
    </div>
</header>
