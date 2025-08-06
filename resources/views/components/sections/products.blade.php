<x-section
    id="products"
    class="bg-neutral-100 px-8 py-16 sm:px-16"
    aria-labelledby="products-header"
>
    <x-section-heading
        id="products-header"
        class="border-b-brand-green-500 mb-8"
    >
        Our Products
    </x-section-heading>

    @if ($products->isEmpty())
        <p class="my-8 text-center font-bold opacity-50">
            There are no products to display...
        </p>
    @endif

    <x-grid class="justify-center sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($products as $product)
            <livewire:product.card :key="$product->id" :$product />
        @endforeach
    </x-grid>
</x-section>
