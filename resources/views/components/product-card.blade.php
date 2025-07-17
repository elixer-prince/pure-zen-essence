<article class="h-84 perspective-midrange">
  <div class="group h-full transition-transform duration-500 transform-3d">
    <div
      class="absolute h-full w-full overflow-hidden rounded-tl-4xl rounded-br-4xl border-2 border-black/50 bg-white backface-hidden"
    >
      <div class="h-1/2 overflow-hidden">
        <img
          class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
          src="https://picsum.photos/seed/{{ rand(1, 100000) }}/300/300"
          alt="Product Image"
        />
      </div>
      <div class="p-4">
        <h3 class="mb-3 text-2xl font-bold">{{ $title }}</h3>
        <p class="mb-5 text-sm">{{ $slot }}</p>
        <x-button class="bg-black text-sm" type="button">More Info</x-button>
      </div>
    </div>

    <div class="absolute h-full w-full rotate-y-180 bg-pink-500 backface-hidden">Card Back</div>
  </div>
</article>
