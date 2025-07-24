<x-layouts.normal>
    <x-slot:page-title>
        Pure Zen Essence | Beauty By Nature
    </x-slot:page-title>
    <x-slot:page-description>
        Welcome to Pure Zen Essence, a family-owned natural products business proudly rooted in the heart of Wakefield
        Savannah, St. Catherine, Jamaica. Founded by the Carty family, our mission is to provide 100% Natural products
        that promote overall health and wellness.
    </x-slot:page-description>

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

        <x-grid class="sm:grid-cols-2 justify-center lg:grid-cols-3">
            @foreach ($products as $product)
                <livewire:product-card :key="$product->id" :$product />
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

    <x-section id="faqs" class="bg-brand-darkblue-950 sm:px-16 py-16 px-8" aria-labelledby="faqs-header">
        <x-section-heading id="faqs-header" class="border-b-brand-green-500 mb-8 text-brand-darkblue-50">
            FAQs
        </x-section-heading>

        <x-grid class="md:grid-cols-2">
            <div>
                <x-cards.faq>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq>
            </div>
            <div>
                <x-cards.faq>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq>
            </div>
            <div>
                <x-cards.faq>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq>
            </div>
        </x-grid>
    </x-section>

    <x-section id="contact" class="py-16 px-8 sm:px-16" aria-labelledby="contact-header">
        <x-forms.form class="w-160 max-w-full p-8 sm:p-12 border-3 border-neutral-400 rounded-lg md:p-20">
            <x-section-heading id="contact-header" class="border-b-brand-blue-500 mb-4 mx-auto">
                <span class="md:hidden">Contact Us</span>
                <span class="hidden md:inline">Send us a message</span>
            </x-section-heading>

            <div class="flex mb-2 flex-col gap-4">
                <x-forms.field>
                    <x-forms.label for="name">
                        Full Name
                    </x-forms.label>
                    <x-forms.input id="name" name="name" placeholder="John Doe" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="email">
                        Email
                    </x-forms.label>
                    <x-forms.input id="email" name="email" type="email" placeholder="john.doe@example.com" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="message">
                        Message
                    </x-forms.label>
                    <x-forms.text-area id="message" name="messsage" id="message" rows="4"
                        placeholder="Write your message here..."></x-forms.text-area>
                </x-forms.field>
            </div>

            <x-button class="bg-brand-green-500 mx-auto text-brand-green-50 hover:bg-brand-green-600" type="button">
                Send Email
                <span class="hidden text-xl sm:inline">
                    <i class="fa-regular fa-envelope"></i>
                </span>
            </x-button>
        </x-forms.form>
    </x-section>
</x-layouts.normal>
