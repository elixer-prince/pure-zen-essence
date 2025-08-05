@php
    $classes =
        'group/card hover:-translate-y-1 transition-transform duration-500 perspective-midrange md:w-90group/card hover:-translate-y-1 transition-transform duration-500 perspective-midrange md:w-90';
@endphp

<article x-data="{ flipped: false }" class="{{ $classes }}">
    <div :class="flipped && '-rotate-y-180'" class="transition-transform duration-500 relative transform-3d">
        {{-- ? Front Face --}}
        <div
            class="border-brand-green-500 h-full flex flex-col overflow-hidden rounded-tl-4xl rounded-br-4xl border-2 bg-white backface-hidden">
            <a class="h-52 block overflow-hidden" href="{{ $product->image }}">
                <img class="h-full w-full object-cover transition-transform duration-500 group-hover/card:scale-115"
                    src="{{ $product->image }}" alt="{{ $product->title }}" />
            </a>

            <div class="p-8">
                <div>
                    <h3 class="mb-3 text-2xl font-bold">{{ $product->title }}</h3>
                    <p class="mb-5 text-black/75">{{ $product->description }}</p>
                </div>

                <div class="flex gap-4">
                    <x-cards.product.more-info-button />

                    @unless (request()->is('/admin/dashboard/products/*/edit'))
                        <x-cards.product.edit-button :$product />
                    @endunless

                    @if (request()->is('/admin/dashboard/products/*/edit'))
                        <x-forms.product.delete :$product />
                    @endif
                </div>
            </div>
        </div>

        {{-- ? Back Face --}}
        <div
            class="absolute bg-white p-4 rounded-tr-4xl flex flex-col rounded-bl-4xl border-brand-green-500 border-2 h-full top-0 w-full rotate-y-180 backface-hidden">
            <div @click="flipped = false"
                class="text-brand-green-500 hover:rotate-90 cursor-pointer hover:text-brand-darkblue-950 transition-all hover:scale-110 duration-500 ml-auto text-3xl">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <div class="mx-4 flex flex-col justify-center mt-4">
                <div>
                    <h3 class="text-2xl font-bold">
                        {{ $product->title }}
                    </h3>
                    <div class="my-3 font-bold text-neutral-500">
                        {{ $price }}
                    </div>
                </div>
                <div class="flex gap-2 flex-wrap">
                    @foreach ($product->sizes as $size)
                        <livewire:product.size-tag :key="$size['id']" :$size :$product :$price :$selected
                            :$currentSizeId />
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
