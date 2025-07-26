<article x-data="{ flipped: false }"
    class="group/card hover:-translate-y-1 transition-transform duration-500 perspective-midrange md:w-90">
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
                    <x-button @click="flipped = true"
                        class="bg-neutral-950 group/button text-sm text-neutral-50 hover:bg-neutral-800" type="button">
                        More Info
                        <span
                            class="hidden opacity-0 group-hover/button:opacity-100 group-hover/button:inline transition-all duration-500">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </x-button>

                    @unless (request()->is('dashboard/products/*/edit'))
                        <x-button href="/dashboard/products/{{ $product->id }}/edit"
                            class="bg-blue-950 group/button text-sm text-brand-darkblue-50 hover:bg-brand-darkblue-800"
                            wire:navigate>
                            Edit Card
                        </x-button>
                    @endunless

                    @if (request()->is('dashboard/products/*/edit'))
                        <x-forms.form action="/dashboard/products/{{ $product->id }}" method="DELETE">
                            <button type="submit"
                                class="border-2 px-4 py-2 rounded-md font-bold border-red-500 cursor-pointer group/button text-sm hover:text-red-50 text-red-500 hover:bg-red-500">
                                Delete Card
                            </button>
                        </x-forms.form>
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
                    <h3 class="text-2xl font-bold">{{ $product->title }}</h3>
                    <div class="my-3 font-bold text-neutral-500">{{ $price }}</div>
                </div>
                <div class="flex gap-2 flex-wrap">
                    @foreach ($product->sizes as $size)
                        <livewire:product.size-tag :key="$size["id"]" :$product :$size :$price />
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
