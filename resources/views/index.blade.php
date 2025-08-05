<x-layouts.normal>
    <x-slot:page-title>Pure Zen Essence | Beauty By Nature</x-slot:page-title>
    <x-slot:page-description>
        Welcome to Pure Zen Essence, a family-owned natural products business proudly rooted in the heart of Wakefield
        Savannah, St. Catherine, Jamaica. Founded by the Carty family, our mission is to provide 100% Natural products
        that promote overall health and wellness.
    </x-slot:page-description>

    <x-hero-section />

    <x-section id="about" class="relative pb-16 sm:px-16 px-8 flex-row gap-16 bg-neutral-950 pt-34 lg:pt-20"
        aria-labelledby="about-header">
        <x-about-image />

        <div class="flex flex-2 flex-col items-center">
            <x-section-heading id="about-header" class="text-neutral-50 border-b-brand-blue-500 mb-8">
                About Us
            </x-section-heading>

            <div class="flex flex-col items-center gap-8">
                <x-cards.about heading="Our Vision">
                    Our vision is to be a trusted family business that nurtures enduring relationships, champions
                    sustainable
                    farming practices, and makes a meaningful impact on both our community and the environment.
                </x-cards.about>

                <x-cards.about heading="Our Mission">
                    As a family-owned business, we are committed to cultivating high-quality products with care,
                    integrity, and
                    profound respect for the land. Through our hard work and shared values, we strive to nourish our
                    community
                    while safeguarding our legacy for future generations.
                </x-cards.about>
            </div>
        </div>
    </x-section>

    <x-section id="products" class="bg-neutral-100 sm:px-16 py-16 px-8" aria-labelledby="products-header">
        <x-section-heading id="products-header" class="border-b-brand-green-500 mb-8">
            Our Products
        </x-section-heading>

        <p class="text-center my-8 font-bold opacity-50">There are no products to display...</p>

        <x-grid class="sm:grid-cols-2 justify-center lg:grid-cols-3">
            @foreach ($products as $product)
                <livewire:product.card :key="$product->id" :$product />
            @endforeach
        </x-grid>
    </x-section>

    <x-section id="testimonials" class="py-16 md:px-16 px-8" aria-labelledby="testimonials-header">
        <x-section-heading id="testimonials-header" class="mb-8 border-b-brand-blue-500">
            Testimonials
        </x-section-heading>

        <x-grid class="sm:grid-cols-2 lg:grid-cols-3">
            <x-cards.testimonial></x-cards.testimonial>
            <x-cards.testimonial></x-cards.testimonial>
            <x-cards.testimonial></x-cards.testimonial>
            <x-cards.testimonial></x-cards.testimonial>
        </x-grid>
    </x-section>

    <x-section id="faqs" class="bg-brand-darkblue-950 sm:px-16 py-16 px-0" aria-labelledby="faqs-header">
        <x-section-heading id="faqs-header" class="border-b-brand-green-500 mb-8 text-brand-darkblue-50">
            FAQs
        </x-section-heading>

        <x-grid class="md:grid-cols-2 w-full">
            <div>
                <x-cards.faq>
                    <x-slot:question>Is the world flat?</x-slot>
                    <x-slot:answer>Yes it is</x-slot>
                </x-cards.faq>
            </div>
            <div>
                <x-cards.faq>
                    <x-slot:question>Is the world flat?</x-slot:question>
                    <x-slot:answer>Yes it is</x-slot:answer>
                </x-cards.faq>
            </div>
            <div>
                <x-cards.faq>
                    <x-slot:question>Is the world flat?</x-slot:question>
                    <x-slot:answer>Yes it is</x-slot:answer>
                </x-cards.faq>
            </div>
        </x-grid>
    </x-section>

    <x-section id="contact" class="py-16 px-8 sm:px-16" aria-labelledby="contact-header">
        <x-forms.inquiry />
    </x-section>
</x-layouts.normal>
