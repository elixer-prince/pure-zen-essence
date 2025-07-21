<x-layouts.normal>
    <x-slot name="pageTitle">Pure Zen Essence | Beauty By Nature</x-slot>
    <x-slot name="pageDescription">...</x-slot>

    <x-section id="about" class="relative flex-row gap-16 bg-neutral-950 pt-34 lg:pt-20"
        aria-labelledby="about-header">
        <x-about-image />

        <div class="flex flex-2 flex-col items-center">
            <x-section-heading id="about-header" class="text-neutral-50 border-b-brand-blue-500">About
                Us</x-section-heading>

            <div class="flex flex-col items-center gap-8">
                <x-cards.about-card heading="Our Vision">
                    Our vision is to be a trusted family business that nurtures enduring relationships, champions
                    sustainable
                    farming practices, and makes a meaningful impact on both our community and the environment.
                </x-cards.about-card>
                <x-cards.about-card heading="Our Mission">
                    As a family-owned business, we are committed to cultivating high-quality products with care,
                    integrity, and
                    profound respect for the land. Through our hard work and shared values, we strive to nourish our
                    community
                    while safeguarding our legacy for future generations.
                </x-cards.about-card>
            </div>
        </div>
    </x-section>

    <x-section id="products" class="bg-neutral-100" aria-labelledby="products-header">
        <x-section-heading id="products-header" class="border-b-brand-green-500">Our Products</x-section-heading>

        <x-grid class="sm:grid-cols-2 justify-center lg:grid-cols-3">
            @foreach ($products as $product)
                <x-cards.product-card :$product />
            @endforeach
        </x-grid>
    </x-section>

  <x-section id="testimonials" aria-labelledby="testimonials-header">
        <x-section-heading id="testimonials-header">Testimonials</x-section-heading>

        <x-grid class="sm:grid-cols-2 lg:grid-cols-3">
            <x-cards.testimonial-card></x-cards.testimonial-card>
            <x-cards.testimonial-card></x-cards.testimonial-card>
            <x-cards.testimonial-card></x-cards.testimonial-card>
            <x-cards.testimonial-card></x-cards.testimonial-card>
        </x-grid>
    </x-section>

    <x-section id="faqs" class="bg-brand-darkblue-950" aria-labelledby="faqs-header">
        <x-section-heading id="faqs-header"
            class="border-b-brand-green-500 text-brand-darkblue-50">FAQs</x-section-heading>

        <x-grid class="md:grid-cols-2">
            <div>
                <x-cards.faq-card>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq-card>
            </div>
            <div>
                <x-cards.faq-card>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq-card>
            </div>
            <div>
                <x-cards.faq-card>
                    <x-slot name="question">Is the world flat?</x-slot>
                    <x-slot name="answer">Yes it is</x-slot>
                </x-cards.faq-card>
            </div>
        </x-grid>
    </x-section>

    <x-section id="contact" aria-labelledby="contact-header">
        <x-forms.form class="w-160 max-w-full p-12 border-3 border-neutral-400 rounded-lg md:p-20">
            <x-section-heading id="contact-header" class="border-b-brand-blue-500 mx-auto">
                <span>Contact Us</span>
                <span class="hidden">Send us a message</span>
            </x-section-heading>
            <div>
                <x-forms.form-label for="name" />
                <x-forms.form-input id="name" name="name" placeholder="Your Name" />
            </div>
            <div>
                <x-forms.form-label for="email" />
                <x-forms.form-input id="email" name="email" type="email" placeholder="Your Email" />
            </div>
            <div>
                <x-forms.form-label for="message" />
                <textarea id="message" name="messsage"
                    class="w-full outline-none rounded-md border-2 border-neutral-400 resize-none px-4 py-3" name=""
                    id="" rows="4" placeholder="Your Message..."></textarea>
            </div>
            <x-button class="bg-brand-green-500 mx-auto text-brand-green-50 hover:bg-brand-green-600" type="button">
                Send Email
                <span class="hidden">
                    <i class="fa-regular fa-envelope"></i>
                </span>
            </x-button>
        </x-forms.form>
    </x-section>
</x-layouts.normal>
