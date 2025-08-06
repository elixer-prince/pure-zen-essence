<x-section
    id="faqs"
    class="bg-brand-darkblue-950 px-0 py-16 sm:px-16"
    aria-labelledby="faqs-header"
>
    <x-section-heading
        id="faqs-header"
        class="border-b-brand-green-500 text-brand-darkblue-50 mb-8"
    >
        FAQs
    </x-section-heading>

    <x-grid class="w-full md:grid-cols-2">
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
