<x-layouts.dashboard>
    <x-slot name="pageTitle">Pure Zen Essence | Dashboard</x-slot>
    <x-slot name="pageDescription">
        This is the dashboard for the Pure Zen Essence website.
    </x-slot>

    <x-section
        id="products"
        class="p-16 pb-16"
        aria-labelledby="products-heading"
    >
        <div class="mb-8 flex items-center gap-8">
            <x-section-heading
                id="products-heading"
                class="border-brand-green-500"
            >
                All Products
            </x-section-heading>

            <x-button
                as="a"
                class="text-brand-green-50 hover:bg-brand-darkblue-900 bg-brand-darkblue-950"
                href="/dashboard/products/create"
                wire:navigate
            >
                New Product
            </x-button>
        </div>

        <x-grid class="sm:grid-cols-2">
            @foreach ($products as $product)
                <livewire:product.card :key="$product->id" :$product />
            @endforeach
        </x-grid>
    </x-section>
</x-layouts.dashboard>
