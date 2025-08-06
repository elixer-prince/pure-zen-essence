<x-layouts.dashboard>
    <x-slot name="pageTitle">Edit | {{ $product->title }}</x-slot>
    <x-slot name="pageDescription">
        Edit the {{ $product->title }} product on this page.
    </x-slot>

    <x-section
        id="edit-card"
        class="flex! p-16"
        aria-labelledby="edit-card-heaading"
    >
        <x-section-heading
            id="edit-card-heading"
            class="border-brand-blue-500 mb-8"
        >
            Edit Product
        </x-section-heading>

        <div>
            <livewire:product.card :$product />

            <x-forms.product.edit :$product />
        </div>
    </x-section>
</x-layouts.dashboard>
