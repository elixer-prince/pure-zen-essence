<x-layouts.dashboard>
    <x-slot name="pageTitle">Pure Zen Essence | Create Product</x-slot>
    <x-slot name="pageDescription">
        This is the page to create new products to be displayed.
    </x-slot>

    <div class="flex min-h-screen items-center justify-center p-8">
        <x-section
            id="create-product"
            class="w-120 rounded-md border-2 border-neutral-500 p-16"
            aria-labelledby="create-product-header"
        >
            <x-section-heading
                id="create-product-header"
                class="border-brand-green-500 mb-6"
            >
                New Product
            </x-section-heading>

            <x-form class="w-full" action="/dashboard/products" method="POST">
                <x-form.field>
                    <x-form.label for="image">Image</x-form.label>
                    <x-form.input
                        type="text"
                        id="image"
                        name="image"
                        placeholder="https://example.com/product-image"
                        required
                    />

                    <x-form.error-message for="image" />
                </x-form.field>

                <x-form.field>
                    <x-form.label for="title">Title</x-form.label>
                    <x-form.input
                        type="text"
                        id="title"
                        name="title"
                        placeholder="Coconut Oil"
                        required
                    />

                    <x-form.error-message for="title" />
                </x-form.field>

                <x-form.field>
                    <x-form.label for="description">Description</x-form.label>
                    <x-form.text-area
                        id="description"
                        name="description"
                        placeholder="Add a description..."
                        rows="3"
                        required
                    ></x-form.text-area>

                    <x-form.error-message for="description" />
                </x-form.field>

                <x-form.field>
                    <x-form.label for="sizes">Sizes</x-form.label>
                    <x-form.input
                        type="text"
                        id="sizes"
                        name="sizes"
                        placeholder="..."
                        required
                    />

                    <x-form.error-message for="sizes" />
                </x-form.field>

                <x-form.field class="flex gap-4">
                    <input type="checkbox" name="size" value="small" />
                    <input type="checkbox" name="size" value="medium" />
                    <input type="checkbox" name="size" value="large" />
                </x-form.field>

                <div>
                    <x-button
                        type="submit"
                        class="bg-brand-green-500 hover:bg-brand-green-600 text-brand-green-50 mt-4"
                    >
                        Create Product
                    </x-button>
                </div>
            </x-form>
        </x-section>
    </div>
</x-layouts.dashboard>
