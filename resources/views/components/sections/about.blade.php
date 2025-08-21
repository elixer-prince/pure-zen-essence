<x-section
    id="about"
    class="bg-brand-green-950 relative flex-row items-center gap-16 px-6 pt-34 pb-16 sm:px-16 lg:pt-20"
    aria-labelledby="about-header"
>
    <x-about-image />

    <div class="flex flex-2 flex-col">
        <header
            id="about-header"
            class="text-lg-h2 mb-8 flex flex-col text-center font-bold text-neutral-50 lg:text-start"
        >
            About Us

            <div
                class="bg-brand-green-500 h-3 w-20 self-center lg:self-start"
            ></div>
        </header>

        <div class="flex flex-col items-center gap-8">
            <x-cards.about heading="Our Vision">
                Our vision is to be a trusted family business that nurtures
                enduring relationships, champions sustainable farming practices,
                and makes a meaningful impact on both our community and the
                environment.
            </x-cards.about>

            <x-cards.about heading="Our Mission">
                As a family-owned business, we are committed to cultivating
                high-quality products with care, integrity, and profound respect
                for the land. Through our hard work and shared values, we strive
                to nourish our community while safeguarding our legacy for
                future generations.
            </x-cards.about>
        </div>
    </div>
</x-section>
