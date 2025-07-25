<x-layouts.dashboard>
    <x-slot:page-title>Edit | {{ $product->title }}</x-slot:page-title>
    <x-slot:page-description>Edit the {{ $product->title }} product on this page.</x-slot:page-description>

    <x-section id="edit-card" class="p-16 flex!" aria-labelledby="edit-card-heaading">
        <x-section-heading id="edit-card-heading" class="mb-8 border-brand-blue-500">
            Edit Product
        </x-section-heading>

        <div>
            <livewire:product-card :$product />

            <x-forms.form class="my-8" action="/dashboard/product/{{ $product->id }}" method="PATCH">
                <x-forms.field>
                    <x-forms.label for="title">Title</x-forms.label>
                    <x-forms.input type="text" id="title" value="{{ $product->title }}" name="title"
                        placeholder="Coconut Oil" required />

                    <x-forms.error-message for="title" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="description">Description</x-forms.label>
                    <x-forms.text-area id="description" name="description"
                        placeholder="Write a description for the product..."
                        rows="4">{{ $product->description }}</x-forms.text-area>

                    <x-forms.error-message for="title" />
                </x-forms.field>

                <div class="flex gap-4">
                    <button type="submit"
                        class="bg-brand-darkblue-500 cursor-pointer hover:bg-brand-darkblue-600 font-bold transition-colors text-brand-green-50 rounded-md px-4 py-2">Save
                        changes</button>

                    <x-button type="a" href="/"
                        class="border-neutral-500 border-2 transition-colors hover:bg-neutral-500 hover:text-neutral-50 font-bold text-neutral-500 rounded-md px-4 py-2">Cancel</x-button>
                </div>
            </x-forms.form>
        </div>
    </x-section>

</x-layouts.dashboard>
