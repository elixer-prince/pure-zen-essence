@php
    $classes =
        "group/card group/card max-w-full transition-transform duration-500 perspective-midrange hover:-translate-y-2";
@endphp

<article x-data="{ flipped: false }" class="{{ $classes }}">
    <div
        :class="flipped && '-rotate-y-180'"
        class="relative transition-transform duration-500 transform-3d"
    >
        {{-- ? Front Face --}}
        <div
            class="border-brand-green-500 flex h-full flex-col overflow-hidden rounded-tl-4xl rounded-br-4xl border-3 bg-white shadow-md backface-hidden"
        >
            <a class="block h-52 overflow-hidden" href="{{ $product->image }}">
                <img
                    class="h-full w-full object-cover transition-transform duration-500 group-hover/card:scale-115"
                    src="{{ asset("images/placeholder-image.svg") }}"
                    alt="{{ $product->title }}"
                />
            </a>

            <div class="p-8">
                <div>
                    <h3 class="text-lg-subtitle/6 mb-3 font-bold">
                        {{ $product->title }}
                    </h3>
                    <p class="mb-5 text-black/75">
                        {{ $product->description }}
                    </p>
                </div>

                <div class="flex gap-4">
                    <x-cards.product.more-info-button />

                    @unless (request()->is("/admin/dashboard/products/*/edit"))
                        @auth("admin")
                            <x-cards.product.edit-button :$product />
                        @endauth
                    @endunless

                    @if (request()->is("/admin/dashboard/products/*/edit"))
                        <x-forms.product.delete :$product />
                    @endif
                </div>
            </div>
        </div>

        {{-- ? Back Face --}}
        <div
            class="border-brand-green-500 absolute top-0 flex h-full max-w-full rotate-y-180 flex-col rounded-tr-4xl rounded-bl-4xl border-3 bg-white p-4 shadow-md backface-hidden"
        >
            <div
                @click="flipped = false"
                class="text-brand-green-500 hover:text-brand-darkblue-950 ml-auto cursor-pointer text-3xl transition-all duration-500 hover:scale-110 hover:rotate-90"
            >
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <div class="mx-4 mt-4 flex flex-col justify-center">
                <div>
                    <h3 class="text-2xl font-bold">
                        {{ $product->title }}
                    </h3>
                    <div class="my-3 font-bold text-neutral-500">
                        {{ $price }}
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach ($product->sizes as $size)
                        <livewire:product.size-tag
                            :key="$size['id']"
                            :$size
                            :$product
                            :$currentSizeId
                        />
                    @endforeach
                </div>
                <div>
                    <p class="py-4 text-black/75">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
