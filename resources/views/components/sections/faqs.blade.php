<x-section
    id="faqs"
    class="bg-brand-darkblue-950 px-0 py-16 md:px-16"
    aria-labelledby="faqs-header"
>
    <x-section-heading id="faqs-header" class="text-brand-darkblue-50 mb-8">
        FAQs
    </x-section-heading>

    <ul
        class="grid w-full gap-8 lg:grid-cols-2 max-md:[&>li]:odd:[&_*]:rounded-tl-none max-md:[&>li]:odd:[&_*]:rounded-bl-none max-md:[&>li]:even:[&_*]:rounded-tr-none max-md:[&>li]:even:[&_*]:rounded-br-none max-md:[&>li]:odd:[&>details]:mr-16 max-md:[&>li]:even:[&>details]:ml-16"
    >
        <li>
            <x-cards.faq>
                <x-slot name="question">Do you have this product?</x-slot>
                <x-slot name="answer">Yes we do!</x-slot>
            </x-cards.faq>
        </li>
        <li>
            <x-cards.faq>
                <x-slot name="question">
                    What type of business do you operate?
                </x-slot>
                <x-slot name="answer">
                    We are a Natural Products business, founded by the Cartys!
                </x-slot>
            </x-cards.faq>
        </li>
        <li>
            <x-cards.faq>
                <x-slot name="question">What do you sell?</x-slot>
                <x-slot name="answer">
                    We sell Natural Oils and Beauty Bar Soaps!
                </x-slot>
            </x-cards.faq>
        </li>
    </ul>
</x-section>
