<x-section
    id="products"
    class="items-center bg-neutral-200 px-6 py-16 md:px-10"
    aria-labelledby="products-header"
>
    <x-section-heading id="products-header" class="mb-8 flex flex-col">
        Our Products

        <div class="bg-brand-green-500 h-3 w-28 self-center"></div>
    </x-section-heading>

    @if ($products->isEmpty())
        <p class="my-8 text-center font-bold opacity-50">
            There are no products to display...
        </p>
    @endif

    <x-grid class="justify-center gap-3 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($products as $product)
            <livewire:product.card :key="$product->id" :$product />
        @endforeach
    </x-grid>
</x-section>
