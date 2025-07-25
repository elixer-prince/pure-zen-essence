<x-layouts.dashboard>
    <x-slot:page-title>
        Pure Zen Essence | Create Product
    </x-slot:page-title>
    <x-slot:page-description>
        This is the page to create new products to be displayed.
    </x-slot:page-description>

    <div class="flex items-center p-8 min-h-screen justify-center">
        <x-section id="create-product" class="rounded-md w-120 border-2 p-16 border-neutral-500"
            aria-labelledby="create-product-header">
            <x-section-heading id="create-product-header" class="border-brand-green-500 mb-6">
                New Product
            </x-section-heading>

            <x-forms.form class="w-full" action="/dashboard/products" method="POST">
                <x-forms.field>
                    <x-forms.label for="image">Image</x-forms.label>
                    <x-forms.input type="text" id="image" name="image" placeholder="..." required />

                    <x-forms.error-message for="image" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="title">Title</x-forms.label>
                    <x-forms.input type="text" id="title" name="title" placeholder="Coconut Oil" required />

                    <x-forms.error-message for="title" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="description">Description</x-forms.label>
                    <x-forms.text-area id="description" name="description" placeholder="Add a description..."
                        rows="3" required></x-forms.text-area>

                    <x-forms.error-message for="description" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.label for="sizes">Sizes</x-forms.label>
                    <x-forms.input type="text" id="sizes" name="sizes" placeholder="..." required />

                    <x-forms.error-message for="sizes" />
                </x-forms.field>

                <div>
                    <button type="submit"
                        class="bg-brand-green-500 transition-colors duration-300 cursor-pointer hover:bg-brand-green-600 mt-4 text-brand-green-50 font-bold py-2 rounded-md px-4">
                        Create Product
                    </button>
                </div>
            </x-forms.form>
        </x-section>
    </div>
</x-layouts.dashboard>
