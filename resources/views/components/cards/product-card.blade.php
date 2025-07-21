<article x-data="{ flipped: false }"
    class="group/card hover:-translate-y-1 transition-transform duration-500 perspective-midrange md:w-90">
    <div x-bind:class="flipped ? '-rotate-y-180' : ''" class="transition-transform duration-500 relative transform-3d">
        <div
            class="border-brand-darkblue-950/50 h-full flex flex-col overflow-hidden rounded-tl-4xl rounded-br-4xl border-2 bg-white backface-hidden">
            <div class="h-52 overflow-hidden">
                <img class=" w-full bg-neutral-700 object-cover transition-transform duration-500 group-hover/card:scale-115"
                    src="{{ asset('images/placeholder-image.svg') }}" alt="Product Image" />
            </div>
            <div class="p-8">
                <div>
                    <h3 class="mb-3 text-2xl font-bold">{{ $product->title }}</h3>
                    <p class="mb-5 text-black/75">{{ $product->description }}</p>
                </div>
                <x-button x-on:click="flipped = true"
                    class="bg-neutral-950 group/button text-sm text-neutral-50 hover:bg-neutral-800" type="button">
                    More Info
                    <span
                        class="hidden opacity-0 group-hover/button:opacity-100 group-hover/button:inline transition-all duration-500">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </x-button>
            </div>
        </div>

        <div
            class="absolute bg-white p-4 rounded-tr-4xl flex flex-col rounded-bl-4xl border-brand-darkblue-950/50 border-2 h-full top-0 w-full rotate-y-180 backface-hidden">
            <div x-on:click="flipped = false"
                class="text-brand-green-500 hover:rotate-90 cursor-pointer hover:text-brand-darkblue-950 transition-all hover:scale-110 duration-500 ml-auto text-3xl">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <div class="mx-4 flex flex-col justify-center mt-4">
                <h3 class="mb-3 text-2xl font-bold">{{ $product->title }}</h3>
                <div class="flex gap-2 flex-wrap">
                    @foreach ($product->sizes as $size)
                        <div
                            class="cursor-pointer not-first:border-2 not-first:border-brand-darkblue-950 transition-colors duration-500 first:bg-brand-darkblue-950 px-4 not-first:text-brand-darkblue-950 font-bold not-first:hover:bg-brand-darkblue-950/25 first:text-brand-darkblue-50 text-sm py-1 rounded-full">
                            {{ $size['name'] }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</article>
