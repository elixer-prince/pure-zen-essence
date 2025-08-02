<x-layouts.normal>
    <x-slot:page-title>Pure Zen Essence | Products</x-slot:page-title>
    <x-slot:page-description>
        Here is a list of all the products sold by Pure Zen Essence.
    </x-slot:page-description>

    <x-section id="products" class="py-16 px-8" aria-labelledby="products-header">
        <x-section-heading id="products-header" class="border-b-brand-green-500 mb-8">
            All Products
        </x-section-heading>

        <x-grid class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <livewire:product.card :key="$product->id" :$product />
            @endforeach

            @if ($products->isEmpty())
                <div class="col-span-full text-center">
                    <p class="text-lg font-semibold">No products available at the moment.</p>
                </div>
            @endif
        </x-grid>
    </x-section>
</x-layouts.normal>
