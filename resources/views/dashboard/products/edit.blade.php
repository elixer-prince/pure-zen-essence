<x-layouts.dashboard>
    <x-slot:page-title>Edit | {{ $product->title }}</x-slot:page-title>
    <x-slot:page-description>
        Edit the {{ $product->title }} product on this page.
    </x-slot:page-description>

    <x-section id="edit-card" class="p-16 flex!" aria-labelledby="edit-card-heaading">
        <x-section-heading id="edit-card-heading" class="mb-8 border-brand-blue-500">
            Edit Product
        </x-section-heading>

        <div>
            <livewire:product.card :$product />

            <x-forms.product.edit :$product />
        </div>
    </x-section>

</x-layouts.dashboard>
