<x-section
    id="about"
    class="relative flex-row gap-16 bg-neutral-950 px-8 pt-34 pb-16 sm:px-16 lg:pt-20"
    aria-labelledby="about-header"
>
    <x-about-image />

    <div class="flex flex-2 flex-col items-center">
        <x-section-heading
            id="about-header"
            class="border-b-brand-blue-500 mb-8 text-neutral-50"
        >
            About Us
        </x-section-heading>

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
